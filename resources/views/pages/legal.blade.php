@extends('layouts.header')

@section('content')
    <div class="container">
        <span class="line top_line"></span>
        <h2 class="content_title mb-0">LEGAL</h2>
        <span class="line bottom_line"></span>
        <div class="row mt-5">
            <p class="blog_item_heading">Payment Terms</p>
            <div class="col-12 col-md-6">
                <p class="blog_item_description">
                    The invoice amount is due and payable as specified in the invoice. Payment can be made via
                    the
                    designated payment methods stated on the invoice.
                </p>
                <p class="blog_item_title">Deposit</p>
                <p class="blog_item_text mb-5">
                    <b>
                        A deposit amount may be required for certain goods or services. The deposit paid is
                        refundable subject to the conditions outlined below.
                    </b>
                </p>
                <p class="blog_item_text mb-5">
                    a) Request for Refund: To initiate a refund, the customer must submit a written refund
                    request within the specified 48-hour timeframe. The request must include the relevant
                    invoice details and the reason for the refund.
                </p>
                <p class="blog_item_text mb-5">
                    ‍b) Eligibility: Refunds will only be granted if the deposit has not been utilized towards
                    the completion of the agreed-upon goods or services. If any portion of the deposit has been
                    applied or consumed, the refund will be adjusted accordingly.‍
                </p>
                <p class="blog_item_text mb-5">
                    c) Refund Process: Once the refund request is received and reviewed, we will process the
                    refund within a reasonable time period. The refund will be issued using the original payment
                    method whenever possible. However, alternative refund methods may be utilized at our
                    discretion.
                </p>
                <p class="blog_item_text mb-5">
                    ‍d) Non-Transferable: Refunds are non-transferable and can only be issued to the original
                    payee mentioned on the invoice. Third-party refund requests will not be entertained.
                </p>
            </div>
            <div class="col-12 col-md-6">
                <p class="blog_item_title">Expiry of Refund Eligibility</p>
                <p class="blog_item_text mb-5">
                    After the initial 48-hour period has elapsed, the deposit becomes non-refundable. No refund
                    requests will be accepted beyond this timeframe, and the deposit will be deemed fully
                    utilized towards the outstanding balance or services rendered.
                </p>
                <p class="blog_item_title">Amendment or Cancellation</p>
                <p class="blog_item_text mb-5">
                    Any changes or cancellations to the goods or services covered by this invoice must be
                    communicated in writing within the specified timeframes and are subject to our approval.
                    Amendments or cancellations may impact the refund eligibility of the deposit, as determined
                    by the terms outlined above.
                </p>
                <p class="blog_item_title">Dispute Resolution</p>
                <p class="blog_item_text mb-5">
                    In the event of a dispute or disagreement regarding the refund request, both parties agree
                    to attempt to resolve the matter through good faith negotiations. If no resolution can be
                    reached, the parties may seek mediation or pursue other legal remedies available in
                    accordance with applicable laws and regulations.
                </p>
                <p class="blog_item_title">Governing Law</p>
                <p class="blog_item_text mb-5">
                    These terms and conditions shall be governed by and construed in accordance with the laws of
                    Victoria, Australia. Any legal actions arising from or related to this invoice shall be
                    subject to the exclusive jurisdiction of the State of Michigan, United States of America. By
                    making the payment mentioned on the invoice, the customer acknowledges and agrees to the
                    terms and conditions stated herein.
                </p>
            </div>
            <img src="../images/legal.png" class="legal_img" alt="">
        </div>
    </div>
@endsection
