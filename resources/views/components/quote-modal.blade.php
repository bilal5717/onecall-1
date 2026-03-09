<!-- Quote Request Modal -->
<div class="modal fade" id="quoteModal" tabindex="-1" aria-labelledby="quoteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 15px; overflow: hidden;">
            <div class="modal-header border-0 py-4" style="background: linear-gradient(135deg, #990000, #cc0000);">
                <h5 class="modal-title text-white fw-bold" id="quoteModalLabel">
                    <i class="fa fa-file-invoice-dollar me-2"></i> Get Free Quote
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form id="quoteForm" class="needs-validation" novalidate>
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="quoteFirstName" 
                                       placeholder="First Name" required>
                                <label for="quoteFirstName">
                                    <i class="fa fa-user me-1"></i> First Name
                                </label>
                                <div class="invalid-feedback">
                                    Please enter your first name.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="quoteLastName" 
                                       placeholder="Last Name" required>
                                <label for="quoteLastName">
                                    <i class="fa fa-user me-1"></i> Last Name
                                </label>
                                <div class="invalid-feedback">
                                    Please enter your last name.
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="quoteEmail" 
                                       placeholder="Email" required>
                                <label for="quoteEmail">
                                    <i class="fa fa-envelope me-1"></i> Email Address
                                </label>
                                <div class="invalid-feedback">
                                    Please enter a valid email address.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input type="tel" class="form-control" id="quotePhone" 
                                       placeholder="Phone" required>
                                <label for="quotePhone">
                                    <i class="fa fa-phone me-1"></i> Phone Number
                                </label>
                                <div class="invalid-feedback">
                                    Please enter your phone number.
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <select class="form-select" id="quoteServiceType" required>
                                    <option value="" selected disabled>Select Service</option>
                                    <option value="tesla-charging">Tesla Charger Installation</option>
                                    <option value="plumbing">Plumbing Services</option>
                                    <option value="electrical">Electrical Services</option>
                                    <option value="ac-ventilation">AC Repair & Ventilation</option>
                                    <option value="painting">Painting Services</option>
                                    <option value="cctv">CCTV Installation</option>
                                    <option value="tiling">Tiling Services</option>
                                    <option value="aluminum-glass">Aluminum & Glass Work</option>
                                    <option value="gypsum">Gypsum Partition & Ceiling</option>
                                    <option value="other">Other Services</option>
                                </select>
                                <label for="quoteServiceType">
                                    <i class="fa fa-tools me-1"></i> Service Type
                                </label>
                                <div class="invalid-feedback">
                                    Please select a service type.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <select class="form-select" id="quoteArea" required>
                                    <option value="" selected disabled>Select Area</option>
                                    <option value="dubai-marina">Dubai Marina</option>
                                    <option value="jlt">JLT</option>
                                    <option value="business-bay">Business Bay</option>
                                    <option value="al-barsha">Al Barsha</option>
                                    <option value="deira">Deira</option>
                                    <option value="downtown">Downtown</option>
                                    <option value="jvc">JVC</option>
                                    <option value="palm-jumeirah">Palm Jumeirah</option>
                                    <option value="jumeirah">Jumeirah</option>
                                    <option value="other">Other Area</option>
                                </select>
                                <label for="quoteArea">
                                    <i class="fa fa-map-marker-alt me-1"></i> Service Area
                                </label>
                                <div class="invalid-feedback">
                                    Please select your area.
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <div class="form-floating">
                            <textarea class="form-control" id="quoteMessage" 
                                      placeholder="Service details..." required
                                      style="height: 100px; min-height: 100px;"></textarea>
                            <label for="quoteMessage">
                                <i class="fa fa-comment me-1"></i> Service Details / Requirements
                            </label>
                            <div class="invalid-feedback">
                                Please describe your service requirements.
                            </div>
                        </div>
                    </div>
                    
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg py-3 fw-bold">
                            <i class="fa fa-paper-plane me-2"></i> Request Free Quote
                        </button>
                        <p class="text-center text-muted small mt-2 mb-0">
                            <i class="fa fa-clock me-1"></i> We'll respond within 60 minutes
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
