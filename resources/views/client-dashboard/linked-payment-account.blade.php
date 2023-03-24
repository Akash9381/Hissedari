@extends('client-dashboard.layouts.includes')
@section('title', 'Profile')
@section('content')

    <div class="dashboard-content">
        <div class="submit-address dashboard-list">
            <h4 class="bg-grea-3">Bank -1 </h4>

            <div class="col-lg-12">
                <div class="heading-properties-2">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group address">
                                <label class="form-label">Bank name</label>
                                <p>{{ $user['InvestorData']['bank_name'] ?? "NA"}}</p>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group address">
                                <label class="form-label">Account Number </label>
                                <p> {{ $user['InvestorData']['account_number'] ?? "NA"}}</p>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group address">
                                <label class="form-label">IFSC Code </label>
                                <p>{{ $user['InvestorData']['ifsc_code'] ?? "NA"}}</p>
                            </div>

                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group address">
                                <label class="form-label">Account Type</label>
                                <p>{{ $user['InvestorData']['account_type'] ?? "NA" }}</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="submit-address dashboard-list">
            <h4 class="bg-grea-3">Bank -2 </h4>

            <div class="col-lg-12">
                <div class="heading-properties-2">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group address">
                                <label class="form-label">Bank name</label>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group address">
                                <label class="form-label">Account Number </label>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group address">
                                <label class="form-label">IFSC Code </label>
                            </div>

                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group address">
                                <label class="form-label">Account Type</label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="submit-address dashboard-list">
            <h4 class="bg-grea-3">Credit Card </h4>

            <div class="col-lg-12">
                <div class="heading-properties-2">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group address">
                                <label class="form-label">Bank name</label>
                                <p>{{json_decode($user['InvestorData']['credit_card_bank_name'])[0] ?? 'NA'}}</p>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group address">
                                <label class="form-label">Card Number </label>
                                <p>{{ json_decode($user['InvestorData']['credit_card_number'])[0] ?? "xxxx123"}}</p>
                            </div>

                        </div>



                    </div>
                </div>
            </div>
        </div>


        <div class="submit-address dashboard-list">
            <h4 class="bg-grea-3">Credit Card 2 </h4>

            <div class="col-lg-12">
                <div class="heading-properties-2">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group address">
                                <label class="form-label">Bank name</label>
                                <p>{{json_decode($user['InvestorData']['credit_card_bank_name'])[1] ?? 'NA'}}</p>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group address">
                                <label class="form-label">Card Number </label>
                                <p>{{ json_decode($user['InvestorData']['credit_card_number'])[1] ?? "xxxx123" }}</p>
                            </div>

                        </div>



                    </div>


                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12">
            <button type="submit" class="btn-6 mt-20">Update
            </button>
        </div>



    </div>
@endsection
