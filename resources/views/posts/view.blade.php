@extends('layouts.user')
@section('content')
            

            <!-- Container -->
                <!-- Title -->
                <div class="hk-pg-header mb-10">
					<div>
						<h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="book"></i></span></span>Invoice</h4>
                    </div>
					<div class="d-flex">
                        <a href="#" class="text-secondary mr-15"><span class="feather-icon"><i data-feather="printer"></i></span></a>
                        <a href="#" class="text-secondary mr-15"><span class="feather-icon"><i data-feather="download"></i></span></a>
                        <button class="btn btn-primary btn-sm">Create New</button>
                    </div>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper hk-invoice-wrap pa-35">
                            <div class="invoice-from-wrap">
                                <div class="row">
                                    <div class="col-md-7 mb-20">
                                        <img class="img-fluid invoice-brand-img d-block mb-20" src="dist/img/invoice-logo.png" alt="brand" />
                                        <h6 class="mb-5">Hencework Inc</h6>
                                        <address>
												<span class="d-block">4747, Pearl Street</span>
												<span class="d-block">Rainy Day Drive, Washington</span>
												<span class="d-block">Brunette@hencework.com</span>
											</address>
                                    </div>
                                    <div class="col-md-5 mb-20">
                                        <h4 class="mb-35 font-weight-600">Invoice / Receipt</h4>
                                        <span class="d-block">Date:<span class="pl-10 text-dark">Nov 17,2017 11:23 AM</span></span>
                                        <span class="d-block">Invoice / Receipt #<span class="pl-10 text-dark">21321434</span></span>
                                        <span class="d-block">Customer #<span class="pl-10 text-dark">321434</span></span>
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-0">
                            <div class="invoice-to-wrap pb-20">
                                <div class="row">
                                    <div class="col-md-7 mb-30">
                                        <span class="d-block text-uppercase mb-5 font-13">billing to</span>
                                        <h6 class="mb-5">Supersonic Co.</h6>
                                        <address>
												<span class="d-block">Sycamore Street</span>
												<span class="d-block">San Antonio Valley, CA 34668</span>
												<span class="d-block">thompson_peter@super.co</span>
												<span class="d-block">ABC:325487</span>
											</address>
                                    </div>
                                    <div class="col-md-5 mb-30">
                                        <span class="d-block text-uppercase mb-5 font-13">Payment info</span>
                                        <span class="d-block">Scott L Thompson</span>
                                        <span class="d-block">MasterCard#########1234</span>
                                        <span class="d-block">Customer #<span class="text-dark">324148</span></span>
                                        <span class="d-block text-uppercase mt-20 mb-5 font-13">amount due</span>
                                        <span class="d-block text-dark font-18 font-weight-600">$22,010</span>
                                    </div>
                                </div>
                            </div>
                            <h5>Items</h5>
                            <hr>
                            <div class="invoice-details">
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-border mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="w-70">Items</th>
                                                    <th class="text-right">Number</th>
                                                    <th class="text-right">Unit Cost</th>
                                                    <th class="text-right">Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="w-70">Design Service</td>
                                                    <td class="text-right">2</td>
                                                    <td class="text-right">$1500</td>
                                                    <td class="text-right">$3000</td>
                                                </tr>
                                                <tr>
                                                    <td class="w-70">Website Development</td>
                                                    <td class="text-right">1</td>
                                                    <td class="text-right">$7500</td>
                                                    <td class="text-right">$7500</td>
                                                </tr>
                                                <tr>
                                                    <td class="w-70">Social Media Services</td>
                                                    <td class="text-right">15</td>
                                                    <td class="text-right">$180</td>
                                                    <td class="text-right">$9000</td>
                                                </tr>
                                                <tr class="bg-transparent">
                                                    <td colspan="3" class="text-right text-light">Subtotals</td>
                                                    <td class="text-right">$19,500</td>
                                                </tr>
                                                <tr class="bg-transparent">
                                                    <td colspan="3" class="text-right text-light border-top-0">Tax</td>
                                                    <td class="text-right border-top-0">$3510</td>
                                                </tr>
                                                <tr class="bg-transparent">
                                                    <td colspan="3" class="text-right text-light border-top-0">Discount</td>
                                                    <td class="text-right border-top-0">$1000</td>
                                                </tr>
                                            </tbody>
                                            <tfoot class="border-bottom border-1">
                                                <tr>
                                                    <th colspan="3" class="text-right font-weight-600">total</th>
                                                    <th class="text-right font-weight-600">$22,010</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class="invoice-sign-wrap text-right py-60">
                                    <img class="img-fluid d-inline-block" src="dist/img/signature.png" alt="sign" />
                                    <span class="d-block text-light font-14">Digital Signature</span>
                                </div>
                            </div>
                            <hr>
                            <ul class="invoice-terms-wrap font-14 list-ul">
                                <li>A buyer must settle his or her account within 30 days of the date listed on the invoice.</li>
                                <li>The conditions under which a seller will complete a sale. Typically, these terms specify the period allowed to a buyer to pay off the amount due.</li>
                            </ul>
                        </section>
                    </div>
                </div>
                <!-- /Row -->
            <!-- /Container -->

@endsection
