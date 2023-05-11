<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\ProductBooking;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Omnipay\Omnipay;

class ProductBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $bookingdata = ProductBooking::all();
      return view('Admin.product_booking_list',compact('bookingdata')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $cart_id = $request->cart_id;
       $data = array();
       $amount = 0 ;

      foreach($cart_id as $i=>$cart_ids){
       $cart = Cart::find($cart_ids);
       $amount = $amount + $cart->product->price;
       $data[$i]['user_id'] = $cart->user_id;
       $data[$i]['product_id'] = $cart->product_id;
       $data[$i]['qty'] = $cart->qty;
       $data[$i]['payment_status'] = '0';

       $productBooking = ProductBooking::insert($data);
       $bookid = ProductBooking::orderBy('id','desc')->take(count($data))->pluck('id');
       if($productBooking){
         Cart::destroy($cart_id);

         if($request->payment_type == 'eway'){
           Session::put('bookids',$bookid);
           $url = $this->ewayPayment($amount);
        //    dd($url);
           return response()->json(['type' => 'eway','url' => $url]);
         }else{
          return response()->json(['type'=>'pay_person']);
         }
       }
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $bookdata = ProductBooking::find($id);
        $bookdata->delete();
        return response()->json('success');
    }

    public function ewayPayment($amount)
    {
        $total_amount = $amount ;

        // eWAY Credentials
        $apiKey = 'F9802CKFy96MSpDghhrzgN1P1DCzjcbPFTLNrRtfI7VDy6lTHGPhvz2RoeX7GKIRDUVtIt';
        $apiPassword = 'EKd0Geb3';
        $apiEndpoint = 'Sandbox';

        // Create the eWAY Client
        $client = \Eway\Rapid::createClient($apiKey, $apiPassword, $apiEndpoint);


        // Transaction details - these would usually come from the application
    $transaction = [
     
    // These should be set to your actual website (on HTTPS of course)
    'RedirectUrl' => route('product.booking.success'),
    'CancelUrl' => route('product.booking.fail'),
    'TransactionType' => \Eway\Rapid\Enum\TransactionType::PURCHASE,
    'Payment' => [
    'TotalAmount' => $total_amount * 100,
    ]
    ];

    $response = $client->createTransaction(\Eway\Rapid\Enum\ApiMethod::RESPONSIVE_SHARED, $transaction);

    $sharedURL = '' ;

    // Check for any errors
    if (!$response->getErrors()) {
    $sharedURL = $response->SharedPaymentUrl;
    } 

    return $sharedURL ;
    }

    public function BookingFaill()
    {
     Session::forget('bookids');
     return redirect()->route('cart');
    }

    public function BookingSuccess()
    {
       $bookIds = Session::get('bookids');
       ProductBooking::whereIn('id',$bookIds)->update(['payment_status' => 1]);
       Session::forget('bookids');
       return redirect()->route('cart');
    }


    
    public function ChangeBookStatus(Request $request)
    {
        $id = $request->id;
        $bookstatus = $request->book_status;
        $category = ProductBooking::where('id',$id)->update([
            'booking_status' => $bookstatus
        ]);
        return response()->json('success');
    }
}
