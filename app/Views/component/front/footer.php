<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><a onclick="asd(1)" id="insert" class="cradit"><img
                            src="<?=base_url('front/')?>/images/fav.png" class="img-fluid login">
                        Login </a> &nbsp; |
                    &nbsp; <a onclick="asd(2)" id="update" class="cradit">Register</a></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="new-added-form" method="post" action="<?=base_url('login')?>" id="login_form">
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <input class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                type="text" name="username" placeholder="Login Id or Email Id">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="form-group mb-4">
                            <input class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                type="password" name="password" placeholder="Membership Password">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <p class="account"><a href="javascript:void(0)" onclick="asd(3)">Forgot your password?</a></p>

                    </div>
                    <div class="text-center">
                        <button type="submit" value="login" name="login"
                            class="button-share hover-button-black bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-48">Login
                            <div class="spinner-border d-none spinner-border-sm" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </button>
                        <hr>
                        <p class="account">Don't have an account? | <a href="javascript:void(0)"
                                onclick="asd(2)">Register Me</a></p>
                    </div>
                </form>


                <form class="new-added-form upd register" action="<?=base_url('register-user')?>" method="post"
                    name="update" id="updatef">
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <input class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                type="text" name="full_name" placeholder="Full Name">
                        </div>
                        <div class="row register-pera">
                            <div class="col-12 col-sm-6 mt-4">
                                <div class="form-group mb-4">
                                    <input
                                        class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                        type="email" name="email" placeholder="Email Id">
                                </div>
                            </div>


                            <!-- <select class="w-100 bg-surface text-secondary caption1 pl-12 pt-12 pb-12 bora-8 mb-3"
                                name="categories">
                                <option value="Financial Planning">City</option>
                                <option value="Business Planning">Business Planning</option>
                                <option value="Development Planning">Development Planning</option>
                            </select> -->

                            <div class="col-12 col-sm-6 mt-4">
                                <div class="form-group mb-3">
                                    <input
                                        class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                        type="text" name="mobile" placeholder="Mobile No">
                                </div>
                            </div>

                        </div>
                        <div class="row register-pera">
                            <div class="col-12 col-sm-6 mt-4">
                                <div class="form-group">
                                    <input
                                        class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                        type="password" name="password" id="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 mt-4">
                                <div class="form-group">
                                    <input
                                        class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                        type="password" name="confirm_password" id="confirm_password"
                                        placeholder="Conform Password">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3 submit_otp d-none">
                            <input class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                type="text" name="otp" id="otp" placeholder="Enter Otp">
                            <label class="form-label" id="timer"></label>
                        </div>
                        <div class="text-center pt-4">
                            <button type="submit"
                                class="button-share hover-button-black bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-48"
                                name="send_otp" id="send_otp" value="send_otp">Send OTP
                                <div class="spinner-border d-none" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </button>
                            <button type="submit"
                                class="button-share hover-button-black bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-48 submit_otp d-none "
                                name="submit_otp" value="submit_otp">Submit Otp
                                <div class="spinner-border d-none" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </button>
                            <hr>
                            <p class="account">Already have an account? | <a href="javascript:void(0)"
                                    onclick="asd(1)">Login</a></p>
                        </div>
                    </div>
                </form>
                <form class="new-added-form reset pass upd" action="<?=base_url('forgot-password-check')?>" method="post"
                    name="reset" id="forgot-password">
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <input class="w-100 bg-surface text-secondary caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                type="text" name="email" placeholder="Enter Mail Id For Reset Password">
                        </div>
                        <div class="text-center pt-4">
                            <button type="submit"
                                class="button-share hover-button-black bg-blue text-white text-button pl-36 pr-36 pt-12 pb-12 bora-48"
                                name="send_mail" id="send_otp" value="send_mail">Send Mail
                                <div class="spinner-border spinner-border-sm d-none" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </button>
                            <hr>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div><a class="scroll-to-top-btn" href="#header"><i class="ph-bold ph-caret-up"></i></a>
<div id="footer">
    <div class="cta-block style-two">
        <div class="bg-cta w-100"><img class="w-100 h-100" src="<?=base_url()?>front/images/cta/bg-cta1.png" alt="" />
        </div>
        <div class="container flex-between h-100">
            <div class="heading5 text-white">Looking for a first-class business consultant?</div><a
                class="button-share hover-button-black bg-white text-button pl-36 pr-36 pt-12 pb-12 bora-48"
                href="<?=base_url('contact')?>">Get A Quote</a>
        </div>
    </div>
    <div class="style-two">
        <div class="footer-block bg-dark pt-60">
            <div class="container">
                <div class="row flex-between pb-40">
                    <div class="col-3">
                        <div class="footer-company-infor flex-columns-between gap-20"><img class="footer-logo"
                                src="<?=base_url()?>front/images/Logo-footer.png" alt="Logo" />
                            <div class="text caption1 text-white">We are a diversified company specialized in
                                providing comprehensive financial solutions for individuals and businesses.</div>
                            <div class="list-social flex-item-center gap-10 style-one"><a
                                    class="item bora-50 w-28 h-28 border-grey-2px flex-center"
                                    href="https://www.facebook.com/" target="_blank"><i
                                        class="icon-facebook fs-12"></i></a><a
                                    class="item bora-50 w-28 h-28 border-grey-2px flex-center"
                                    href="https://www.linkedin.com/" target="_blank"><i class="icon-in fs-12"></i></a><a
                                    class="item bora-50 w-28 h-28 border-grey-2px flex-center"
                                    href="https://www.twitter.com/" target="_blank"><i
                                        class="icon-twitter fs-10"></i></a><a
                                    class="item bora-50 w-28 h-28 border-grey-2px flex-center"
                                    href="https://www.instagram.com/" target="_blank"><i
                                        class="icon-insta fs-10"></i></a><a
                                    class="item bora-50 w-28 h-28 border-grey-2px flex-center"
                                    href="https://www.youtube.com/" target="_blank"><i
                                        class="icon-youtube fs-10"></i></a></div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="footer-navigate flex-center gap-80">
                            <div class="footer-nav-item">
                                <div class="item-heading text-button-small text-white">Quick Links</div>
                                <ul class="list-nav mt-4">
                                    <li class="mt-12"><a class="caption1 text-line hover-underline"
                                            href="<?=base_url('/about')?>">About us</a></li>
                                    <li class="mt-12"><a class="caption1 text-line hover-underline"
                                            href="service-one.html">Services</a></li>
                                    <li class="mt-12"><a class="caption1 text-line hover-underline"
                                            href="case-studies-one.html">Case Studies</a></li>
                                    <li class="mt-12"><a class="caption1 text-line hover-underline"
                                            href="<?=base_url('/contact')?>">Contact</a></li>
                                </ul>
                            </div>
                            <div class="footer-nav-item">
                                <div class="item-heading text-button-small text-white">Pages</div>
                                <ul class="list-nav mt-4">
                                    <li class="mt-12"><a class="caption1 text-line hover-underline"
                                            href="faqs.html">FAQs</a></li>
                                    <li class="mt-12"><a class="caption1 text-line hover-underline"
                                            href="pricing.html">Pricing</a></li>
                                    <li class="mt-12"><a class="caption1 text-line hover-underline"
                                            href="partners.html">Partners</a></li>
                                    <li class="mt-12"><a class="caption1 text-line hover-underline"
                                            href="contact-two.html">Support Center</a></li>
                                </ul>
                            </div>
                            <div class="footer-nav-item">
                                <div class="item-heading text-button-small text-white">Blog</div>
                                <ul class="list-nav mt-4">
                                    <li class="mt-12"><a class="caption1 text-line hover-underline"
                                            href="blog-list-one.html">Blog List</a></li>
                                    <li class="mt-12"><a class="caption1 text-line hover-underline"
                                            href="blog-grid.html">Blog Grid</a></li>
                                    <li class="mt-12"><a class="caption1 text-line hover-underline"
                                            href="blog-masonry.html">Masonry</a></li>
                                    <li class="mt-12"><a class="caption1 text-line hover-underline"
                                            href="blog-detail-one.html">Blog Detail</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="company-contact">
                            <div class="heading text-button-small text-white">Newsletter</div>
                            <!--  <div class="mt-12 flex-item-center"> 
                    <svg width="36" height="36" viewbox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M26.43 16.1254C25.785 16.1254 25.275 15.6004 25.275 14.9704C25.275 14.4154 24.72 13.2604 23.79 12.2554C22.875 11.2804 21.87 10.7104 21.03 10.7104C20.385 10.7104 19.875 10.1854 19.875 9.55539C19.875 8.92539 20.4 8.40039 21.03 8.40039C22.53 8.40039 24.105 9.21039 25.485 10.6654C26.775 12.0304 27.6 13.7254 27.6 14.9554C27.6 15.6004 27.075 16.1254 26.43 16.1254Z" fill="#C1D8FF"></path>
                      <path d="M31.8446 16.125C31.1996 16.125 30.6896 15.6 30.6896 14.97C30.6896 9.645 26.3546 5.325 21.0446 5.325C20.3996 5.325 19.8896 4.8 19.8896 4.17C19.8896 3.54 20.3996 3 21.0296 3C27.6296 3 32.9996 8.37 32.9996 14.97C32.9996 15.6 32.4746 16.125 31.8446 16.125Z" fill="#C1D8FF"></path>
                      <path d="M17.685 21.315L12.78 26.22C12.24 25.74 11.715 25.245 11.205 24.735C9.66 23.175 8.265 21.54 7.02 19.83C5.79 18.12 4.8 16.41 4.08 14.715C3.36 13.005 3 11.37 3 9.81C3 8.79 3.18 7.815 3.54 6.915C3.9 6 4.47 5.16 5.265 4.41C6.225 3.465 7.275 3 8.385 3C8.805 3 9.225 3.09 9.6 3.27C9.99 3.45 10.335 3.72 10.605 4.11L14.085 9.015C14.355 9.39 14.55 9.735 14.685 10.065C14.82 10.38 14.895 10.695 14.895 10.98C14.895 11.34 14.79 11.7 14.58 12.045C14.385 12.39 14.1 12.75 13.74 13.11L12.6 14.295C12.435 14.46 12.36 14.655 12.36 14.895C12.36 15.015 12.375 15.12 12.405 15.24C12.45 15.36 12.495 15.45 12.525 15.54C12.795 16.035 13.26 16.68 13.92 17.46C14.595 18.24 15.315 19.035 16.095 19.83C16.635 20.355 17.16 20.865 17.685 21.315Z" fill="#C1D8FF"></path>
                      <path d="M32.9554 27.4955C32.9554 27.9155 32.8804 28.3505 32.7304 28.7705C32.6854 28.8905 32.6404 29.0105 32.5804 29.1305C32.3254 29.6705 31.9954 30.1805 31.5604 30.6605C30.8254 31.4705 30.0154 32.0555 29.1004 32.4305C29.0854 32.4305 29.0704 32.4455 29.0554 32.4455C28.1704 32.8055 27.2104 33.0005 26.1754 33.0005C24.6454 33.0005 23.0104 32.6405 21.2854 31.9055C19.5604 31.1705 17.8354 30.1805 16.1254 28.9355C15.5404 28.5005 14.9554 28.0655 14.4004 27.6005L19.3054 22.6955C19.7254 23.0105 20.1004 23.2505 20.4154 23.4155C20.4904 23.4455 20.5804 23.4905 20.6854 23.5355C20.8054 23.5805 20.9254 23.5955 21.0604 23.5955C21.3154 23.5955 21.5104 23.5055 21.6754 23.3405L22.8154 22.2155C23.1904 21.8405 23.5504 21.5555 23.8954 21.3755C24.2404 21.1655 24.5854 21.0605 24.9604 21.0605C25.2454 21.0605 25.5454 21.1205 25.8754 21.2555C26.2054 21.3905 26.5504 21.5855 26.9254 21.8405L31.8904 25.3655C32.2804 25.6355 32.5504 25.9505 32.7154 26.3255C32.8654 26.7005 32.9554 27.0755 32.9554 27.4955Z" fill="#2868D8"></path>
                    </svg>
                    <div class="text ml-16">
                      <div class="caption2 text-line">Need help? 24/7 </div>
                      <div class="fw-700 text-white mt-4">001-1234-88888</div>
                    </div>
                  </div> -->
                            <div class="locate mt-12 flex-item-center"> <i class="ph-light ph-map-pin text-line"></i>
                                <div class="caption1 text-line ml-8"><?=getGlobalSetting()?->address?>
                                </div>
                            </div>
                            <div class="send-block mt-20 flex-item-center">
                                <input class="caption1 text-secondary" type="text" placeholder="Your email address" />
                                <button class="flex-center"><i class="ph ph-paper-plane-tilt text-white"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-line"></div>
                <div class="footer-bottom flex-between pt-12 pb-12">
                    <div class="left-block flex-item-center">
                        <div class="copy-right text-line caption1">©2023 ALL IT SOLUTIONS LLC. All Rights Reserved   .</div>
                    </div>
                    <div class="nav-link flex-item-center gap-10"><a class="text-line caption1 hover-underline"
                            href="#!">Terms Of Services</a><span class="text-line caption1">|</span><a
                            class="text-line caption1 hover-underline" href="#!">Privacy Policy</a><span
                            class="text-line caption1">|</span><a class="text-line caption1 hover-underline"
                            href="#!">Cookie Policy</a></div>
                </div>
            </div>
        </div>
    </div>
</div>