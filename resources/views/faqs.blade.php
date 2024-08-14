@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <h1 class="text-center card-header">FAQs</h1>
        <div class="card-body">
            <p class="text-center">Welcome to our FAQ page. <br>Here you’ll find answers to common questions about our bidding system.</p>
            <div class="faq-section mt-4">
                <ol>
                    <li>
                        <strong>What is this bidding system?</strong>
                        <p>This bidding system allows users to participate in auctions by placing bids on various items or services. The highest bid at the end of the auction wins.</p>
                    </li>
                    <li>
                        <strong>How do I create an account?</strong>
                        <p>To create an account, click on the "Sign Up" button on the homepage. Fill in the required details and submit the form.</p>
                    </li>
                    <li>
                        <strong>How do I place a bid?</strong>
                        <p>After logging in, browse the available auctions, select an item, and enter your bid amount. Click "Place Bid" to submit your bid.</p>
                    </li>
                    <li>
                        <strong>Can I cancel or retract a bid?</strong>
                        <p>No, once a bid is placed, it cannot be canceled or retracted. Please ensure you want to bid before submitting.</p>
                    </li>
                    <li>
                        <strong>How do I know if I’ve won an auction?</strong>
                        <p>You will receive an email notification if you win an auction. You can also check the status of your bids in the "My Bids" section of your account.</p>
                    </li>
                    <li>
                        <strong>What payment methods are accepted?</strong>
                        <p>We accept various payment methods, including credit/debit cards, PayPal, and bank transfers. Payment details will be provided upon winning an auction.</p>
                    </li>
                    <li>
                        <strong>Is there a minimum bid amount?</strong>
                        <p>Yes, each auction has a minimum bid amount, which will be displayed on the auction page.</p>
                    </li>
                    <li>
                        <strong>What happens if I do not pay after winning an auction?</strong>
                        <p>Failure to pay within the specified time frame may result in the cancellation of your winning bid and suspension of your account.</p>
                    </li>
                    <li>
                        <strong>How can I contact support?</strong>
                        <p>If you need help or have any questions, please visit our "Help & Support" page or contact us directly through the "Contact Us" form.</p>
                    </li>
                    <li>
                        <strong>Can I sell my items through this bidding system?</strong>
                        <p>Yes, you can do both selling and buying on our platform. We are support user listings for selling items but need admin approval.</p>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection