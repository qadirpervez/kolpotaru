<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seller;
use App\SellerDocument;
use Session;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register.seller.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data
        $this->validate($request,[
          'firstName' => 'required|alpha|min:3|max:255',
          'lastName' => 'required|alpha|min:1|max:255',
          'fatherHusbandName' => 'required|max:255',
          'addressHouseShopNo' => 'required|max:255',
          'addressStreet' => 'required|max:255',
          'addressCity' => 'required|alpha|max:255',
          'addressPin' => 'required|min:6|max:6',
          'panOfProprietor' => 'required|alpha_num|min:10|max:10',
          'companyName' => 'required|alpha_num|min:3|max:255',
          'combo' => 'required',
          'description' => 'required',
          'yearsInBusiness' => 'required',
          'turnOver' => 'required',
          'idProof' => 'file',
          'addressProof' => 'file',
          'email' => 'required|email|unique:sellers,email',
          'password' => 'required|min:6|confirmed'
        ]);
        //store the data
        // save the document.
        if($request->hasFile('idProof') && $request->hasFile('addressProof')){
          $dest = 'uploads/verificationDocuments';
          $idProofFile = $request->file('idProof');
          $idProofName =  mt_rand(1111111111111111111, 1999999999999999999) . $idProofFile->getClientOriginalName();
          $idProofFile->move($dest, $idProofName);
          $documentOne = new SellerDocument;
          $documentOne->documentName = $idProofName;
          $documentOne->save();
          $addressProofFile = $request->file('addressProof');
          $addressProofName =  mt_rand(1111111111111111111, 1999999999999999999) . $addressProofFile->getClientOriginalName();
          $addressProofFile->move($dest, $addressProofName);
          $documentTwo = new SellerDocument;
          $documentTwo->documentName = $addressProofName;
          $documentTwo->save();
        }
        //save the seller
        $seller = new Seller;

        $seller->firstName = $request->firstName;
        $seller->middleName = $request->middleName;
        $seller->lastName = $request->lastName;
        $seller->fatherHusbandName = $request->fatherHusbandName;
        $seller->companyName = $request->companyName;
        $seller->shopName = $request->shopName;
        $seller->addressHouseShopNo = $request->addressHouseShopNo;
        $seller->addressStreet = $request->addressStreet;
        $seller->addressCity = $request->addressCity;
        $seller->addressPin = $request->addressPin;
        $seller->mainPersonName = $request->mainPersonName;
        $seller->contactablePersonName = $request->contactablePersonName;
        $seller->WhatsappNo = $request->WhatsappNo;
        $seller->typeOfCompany = $request->typeOfCompany;
        $seller->typeOfCompany_other = $request->typeOfCompany_other;
        $seller->panOfProprietor = $request->panOfProprietor;
        $seller->panOfCompany = $request->panOfCompany;
        $seller->tinOfCompany = $request->tinOfCompany;
        $seller->vat = $request->vat;
        $seller->cstGstNo = $request->cstGstNo;
        $seller->registrationNo = $request->registrationNo;
        $seller->productCategory = $request->productCategory;
        $seller->timeInBusiness = $request->timeInBusiness;
        $seller->combo = $request->combo == 'true' ? 1 : 0;
        $seller->experience = $request->experience == 'true' ? 1 : 0;
        $seller->experienceDescription = $request->experienceDescription;
        $seller->experienceURL = $request->experienceURL;
        $seller->description = $request->description;
        $seller->yearsInBusiness = $request->yearsInBusiness;
        $seller->turnOver = $request->turnOver;
        $seller->facebookURL = $request->facebookURL;
        $seller->linkedinURL = $request->linkedinURL;
        $seller->email = $request->email;
        $seller->password = bcrypt($request->password);
        $seller->documentOne_id = $documentOne->id;
        $seller->documentTwo_id = $documentTwo->id;
        $seller->save();
        //redirect with flash message
        return redirect('home');
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
    public function destroy($id)
    {
        //
    }
}
