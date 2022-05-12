<div id="newsletter_popup" class="newsletter-popup">
            <div class="popup-container">
                <div class="popup-close">
                    <span class="p-close"><span>X</span></span>
                </div> <!-- end of popup-close -->

                <div class="popup-area text-center">
                    <h2>Subscribe to our Newsletter</h2>
                    <div class="popup-body">
                        <p>Subscribe to the gifty mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                        <div class="subscribe-form-group">
                            <form action="{{url('subscription')}}" method="post">
                                @csrf
                                <div class="input-group">
                                    <input type="text" placeholder="Enter your email address" name="email" required>
                                    <button class="default-btn secondary" type="submit">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div> <!-- end of popup-body -->

                    <div class="popup-footer">
                        <div class="form-check">
                            <div class="custom-checkbox">
                                <input class="form-check-input" type="checkbox" id="cancel_popup">
                                <span class="checkmark"></span>
                                <label class="form-check-label" for="cancel_popup">Don't show this popup again</label>
                            </div>
                        </div>
                    </div> <!-- end of popup-footer -->
                </div> <!-- end of popup-area -->
            </div> <!-- end of popup-container -->
        </div>