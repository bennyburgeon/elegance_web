

@extends('web.layout') @section('body')
<div class="quickLinks-wrap js-quickLinks-wrap-d d-none d-lg-flex">
        <div class="quickLinks-wrap js-quickLinks-wrap-d d-none d-lg-flex">
            <div class="quickLinks js-quickLinks closed">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col">
                            <a href="tel: +44 (0) 1382 549282" class="link">
                                <i class="icon-telephone"></i><span>Call Us Now</span></a>

                        </div>
                        <div class="col">
                            <a href="#" class="link">
                                <i class="icon-placeholder"></i><span>Find Branches</span></a>
                            <div class="link-drop p-0">
                                <div class="google-map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9917.824925562549!2d-0.1243114!3d51.5782013!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x77dc823a78a92fd3!2sElegance%20Beauty%20Clinic!5e0!3m2!1sen!2sin!4v1612643188012!5m2!1sen!2sin"
                                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                                        aria-hidden="false" tabindex="0"></iframe>

                                </div>
                            </div>
                        </div>


                        <div class="col">
                            <a href="#" class="link">
                                <i class="icon-emergency-call"></i><span>Request Callback</span>
                            </a>
                            <div class="link-drop">
                                <h5 class="link-drop-title"><i class="icon-calendar"></i>Request Callback</h5>
                                <form id="requestForm" method="post" novalidate>
                                    <div class="successform">
                                        <p>Your message was sent successfully!</p>
                                    </div>
                                    <div class="errorform">
                                        <p>Something went wrong, try refreshing and submitting the form again.</p>
                                    </div>
                                    <div class="input-group">
                                        <span>
                                            <i class="icon-user"></i>
                                        </span>
                                        <input name="requestname" type="text" class="form-control"
                                            placeholder="Your Name" />
                                    </div>
                                    <div class="row row-sm-space mt-1">
                                        <div class="col">
                                            <div class="input-group">
                                                <span>
                                                    <i class="icon-email2"></i>
                                                </span>
                                                <input name="requestemail" type="text" class="form-control"
                                                    placeholder="Your Email" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group">
                                                <span>
                                                    <i class="icon-smartphone"></i>
                                                </span>
                                                <input name="requestphone" type="text" class="form-control"
                                                    placeholder="Your Phone" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="selectWrapper input-group mt-1">
                                        <span>
                                            <i class="icon-micro"></i>
                                        </span>
                                        <select name="requestservice" class="form-control">
                                            <option selected="selected" disabled="disabled">Select treatment</option>
                                            <option value="Molecular Testing & Oncology">Brows & face treading</option>
                                            <option value="Histology">Brows &face waxing</option>
                                            <option value="General Diagnostic Tests">Eyebrow & eyelash tinting</option>
                                            <option value="Naturopathic">Hi-definition perfect brows</option>
                                            <option value="Genetics Tests">Henna Brows</option>
                                            <option value="Cytology">Brow lamination</option>
                                            <option value="Cytology">Party lashes</option>
                                            <option value="Cytology">Semi permanent natural & glamour lashes </option>
                                            <option value="Cytology">Russian natural and glamour lashes</option>
                                            <option value="Cytology">Lash lift and tint</option>
                                            <option value="Cytology">Basic Manicure & pedicure</option>
                                            <option value="Cytology">Gel Manicures and pedicures</option>
                                            <option value="Cytology">Acrylics extensions</option>
                                            <option value="Cytology">Gel extension</option>
                                            <option value="Cytology">Japanese manicure & pedicure</option>
                                            <option value="Cytology">Waxing</option>
                                            <option value="Cytology">Body & intimate waxing</option>
                                            <option value="Cytology">Body & head massage</option>
                                            <option value="Cytology">Basic and advanced facials</option>
                                            <option value="Cytology">Ladies cut & styling</option>
                                            <option value="Cytology">Hair Highlights</option>
                                            <option value="Cytology">Hair tinting</option>
                                            <option value="Cytology">Gents cut & styling</option>
                                            <option value="Cytology">Gents grooming</option>
                                            <option value="Cytology">Wet and hot towel shave</option>
                                            <option value="Cytology">Gents hair highlights</option>
                                            <option value="Cytology">Girls brows</option>
                                            <option value="Cytology">Girls lashes</option>
                                            <option value="Cytology">Girls nails</option>
                                            <option value="Cytology">Girls hair</option>
                                            <option value="Cytology">Pamper packages</option>
                                        </select>
                                    </div>
                                    <div class="row row-sm-space mt-1">
                                        <div class="col-sm-6">
                                            <div class="input-group flex-nowrap">
                                                <span>
                                                    <i class="icon-calendar2"></i>
                                                </span>
                                                <div class="datepicker-wrap">
                                                    <input name="requestdate" type="text"
                                                        class="form-control datetimepicker" placeholder="Date" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mt-1 mt-sm-0">
                                            <div class="input-group flex-nowrap">
                                                <span>
                                                    <i class="icon-clock"></i>
                                                </span>
                                                <div class="datepicker-wrap">
                                                    <input name="requesttime" type="text"
                                                        class="form-control timepicker" placeholder="Time" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right mt-2">
                                        <button type="submit" class="btn btn-sm btn-hover-fill">Request</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col">
                            <a href="#" class="link">
                                <i class="icon-black-envelope"></i><span>Mail Us Now</span>
                            </a>
                            <div class="link-drop">
                                <h5 class="link-drop-title"><i class="icon-price-tag"></i>Mail Us Now</h5>
                                <p>Send us querries about skin related issues now</p>
                                <ul class="icn-list">
                                    <li><i class="icon-email2"></i><span class="phone">hello@elegancesalons.co.uk</span>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <a href="#" class="link">
                                <i class="icon-smartphone"></i><span>Download App</span>
                            </a>
                            <div class="link-drop">
                                <h5 class="link-drop-title"><i class="icon-smartphone"></i>Download App Now</h5>
                                <table class="row-table">
                                    <tr>

                                        <a href="#specialistsSection"
                                            class="btn btn-sm btn-hover-fill link-inside">Android
                                            Playstore</a></br></br>

                                    </tr>


                                    <tr>

                                        <a href="#specialistsSection"
                                            class="btn btn-sm btn-hover-fill link-inside">iPhone AppStore</a>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col col-close"><a href="#" class="js-quickLinks-close"><i class="icon-top"
                                    data-toggle="tooltip" data-placement="top" title="Close panel"></i></a></div>
                    </div>
                </div>
                <div class="quickLinks-open js-quickLinks-open"><span data-toggle="tooltip" data-placement="left"
                        title="Open panel">+</span></div>
            </div>
        </div>
    </div>
    <!--//quick links-->
    <div class="page-content">
        <!--section-->
        <div class="section mt-0">
            <div class="breadcrumbs-wrap">
                <div class="container">
                    <div class="breadcrumbs">
                        <a href="index-2.html">Home</a>
                        <span>Contact</span>
                    </div>
                </div>
            </div>
        </div>
        <!--//section-->
        <!--section faq-->
        <div class="section bg-grey py-0">
            <div class="container-fluid px-0">
                <div class="row no-gutters">
                    <div class="col-xl-6 banner-left bg-cover align-items-end"
                        style="background-image: url({{ asset('public/images/content/banner-left8.jpg')}})"></div>
                    <div class="col-xl-6">
                        <div class="faq-wrap">
                            <ul class="services-nav flex-column flex-nowrap">
                                <li class="nav-item">
                                    <a class="nav-link" href="#submenu1" data-toggle="collapse"
                                        data-target="#submenu1">SELECT AN OPTION</a>
                                    <div class="collapse show" id="submenu1">
                                        <ul class="flex-column nav">
                                            <li class="nav-item"><a class="nav-link" data-toggle="modal"
                                                    data-target="#modalBookingForm1" href="#">Reschedule Booking</a>
                                            </li>

                                            <li class="nav-item"><a class="nav-link" data-toggle="modal"
                                                    data-target="#modalBookingForm4" href="#">Cancel Booking</a></li>

                                            <li class="nav-item"><a class="nav-link" data-toggle="modal"
                                                    data-target="#modalBookingForm2" href="#">New Booking</a></li>

                                            <li class="nav-item"><a class="nav-link" data-toggle="modal"
                                                    data-target="#modalBookingForm3" href="#">Enquiries</a></li>

                                            <li class="nav-item"><a class="nav-link" data-toggle="modal"
                                                    data-target="#modalBookingForm5" href="#">Feedbacks</a></li>


                                            <li class="nav-item"><a class="nav-link" data-toggle="modal"
                                                    data-target="#modalBookingForm7" href="#">Gift Card</a></li>

                                            <li class="nav-item"><a class="nav-link" data-toggle="modal"
                                                    data-target="#modalBookingForm6" href="#">Opportunity</a></li>

                                            <li class="nav-item"><a class="nav-link" data-toggle="modal"
                                                    data-target="#modalBookingForm8" href="#">Job Vacancy</a></li>

                                        </ul>
                                    </div>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--//section faq-->

    </div>

    <div class="backToTop js-backToTop">
        <i class="icon icon-up-arrow"></i>
    </div>
    <div class="modal modal-form modal-form-sm fade" id="modalQuestionForm">
        <div class="modal-dialog">
            <div class="modal-content">
                <button aria-label='Close' class='close' data-dismiss='modal'>
                    <i class="icon-error"></i>
                </button>
                <div class="modal-body">

                </div>
            </div>
        </div>
    </div>
    <!-- ================================================================================================================ RESCHEDULE ID001 =========================================== -->
    <div class="modal modal-form fade" id="modalBookingForm1">
        <div class="modal-dialog">
            <div class="modal-content">
                <button aria-label='Close' class='close' data-dismiss='modal'>
                    <i class="icon-error"></i>
                </button>
                <div class="modal-body">
                    <div class="modal-form">
                        <div class="post-text">
                            <form method="post" action="emailsphp/reschedule.php" class="contact-form"
                                id="rescheduleForm" enctype='multipart/form-data'>
                                <div class="reschedule" style="overflow-y: scroll;overflow-x: hidden; height: 450px;">
                                    <div class="mt-1">
                                        <p>
                                        <p>Do you know you can also reschedule your appointments by signing in to your
                                            online account. Please note, rescheduling under 24 hours notice will incur
                                            50% charge of your appointment.</p>
                                        </p>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group" style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <span>
                                                <i class="icon-user"></i>
                                            </span>
                                            <input name="re-Fname" type="text" class="form-control"
                                                placeholder="First Name" required />
                                        </div>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group" style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <span>
                                                <i class="icon-user"></i>
                                            </span>
                                            <input name="re-Lname" type="text" class="form-control"
                                                placeholder="Last Name" required />
                                        </div>
                                    </div>
                                    <div class="row row-sm-space mt-1">
                                        <div class="col">
                                            <div class="input-group"
                                                style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                                <span>
                                                    <i class="icon-email2"></i>
                                                </span>
                                                <input name="re-mail" type="text" class="form-control"
                                                    placeholder="Your Email" required />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group"
                                                style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                                <span>
                                                    <i class="icon-smartphone"></i>
                                                </span>
                                                <input name="re-phone" type="text" class="form-control"
                                                    placeholder="Your Phone" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="selectWrapper input-group mt-1">
                                        <span>
                                            <i class="icon-placeholder"></i>
                                        </span>
                                        <select name="re-salon" class="form-control" required>
                                            <option value="">Choose booked salon</option>
                                            <option value="Glasgow Fort, Glasgow">Glasgow Fort, Glasgow</option>
                                            <option value="Bonaccord Centre, Aberdeen">Bonaccord Centre, Aberdeen
                                            </option>
                                            <option value="The Thistle Centre, Stirling">The Thistle Centre, Stirling
                                            </option>
                                            <option value="Ocean Terminal, Edinburgh">Ocean Terminal, Edinburgh</option>
                                            <option value="Wellgate Shopping Centre, Dundee">Wellgate Shopping Centre,
                                                Dundee</option>

                                            <option value="Overgate Centre, Dundee">Overgate Centre, Dundee</option>
                                            <option value="Overgate Centre, Dundee">Overgate Centre, Dundee</option>
                                            <option value="Fortkinnaird, Edinburgh">Fortkinnaird, Edinburgh</option>
                                        </select>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group" style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <span>
                                                <i class="icon-clipboard"></i>
                                            </span>
                                            <input name="re-treatment" type="text" class="form-control"
                                                placeholder="Enter Treatment Booked" required />
                                        </div>
                                    </div>
                                    <div class="mt-1">
                                        <p>Existing Booking Details</p>
                                    </div>
                                    <div class="row row-sm-space mt-1">
                                        <div class="col-sm-6">
                                            <div class="input-group flex-nowrap"
                                                style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                                <span>
                                                    <i class="icon-calendar2"></i>
                                                </span>
                                                <div class="datepicker-wrap">
                                                    <input name="re-Odate" type="text"
                                                        class="form-control datetimepicker" placeholder="Date" readonly
                                                        id="existing" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mt-1 mt-sm-0">
                                            <div class="input-group"
                                                style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                                <span>
                                                    <i class="icon-clock"></i>
                                                </span>
                                                <input name="re-Otime" type="text" class="form-control"
                                                    placeholder="Time" required />
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mt-1 mt-sm-0">
                                            <select name="re-OtimePeriod" class="form-control" required>
                                                <option value="" disabled="disabled" selected="selected">AM/PM</option>
                                                <option value="AM">AM</option>
                                                <option value="PM">PM</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mt-1">
                                        <p>Reschedule Booking Details</p>
                                    </div>
                                    <div class="row row-sm-space mt-1">
                                        <div class="col-sm-6">
                                            <div class="input-group flex-nowrap"
                                                style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                                <span>
                                                    <i class="icon-calendar2"></i>
                                                </span>
                                                <div class="datepicker-wrap">
                                                    <input name="re-Ndate" type="text"
                                                        class="form-control datetimepicker" placeholder="Date" readonly
                                                        id="existing" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mt-1 mt-sm-0">
                                            <div class="input-group"
                                                style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                                <span>
                                                    <i class="icon-clock"></i>
                                                </span>
                                                <input name="re-Ntime" type="text" class="form-control"
                                                    placeholder="Time" required />
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mt-1 mt-sm-0">
                                            <select name="re-NtimePeriod" class="form-control" required>
                                                <option value="" disabled="disabled" selected="selected">AM/PM</option>
                                                <option value="AM">AM</option>
                                                <option value="PM">PM</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group"
                                            style="height:114px;border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <span>
                                                <i class="icon-pencil-writing"></i>
                                            </span>
                                            <textarea rows="4" name="re-message" type="text" class="form-control"
                                                placeholder="Additional Details"
                                                style="padding-bottom: 100px;height:100px;" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col mt-1">
                                        <div class="g-recaptcha" data-sitekey="6LfzS34iAAAAACfhVCmaU_a4LNVsKzi2zGR_xAo0"
                                            id="recheduleCaptcha" required="required"></div>
                                    </div>

                                    <div class="text-right mt-2">
                                        <button type="submit" class="btn btn-sm btn-hover-fill"
                                            name="send">Submit</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ======================================================================================================== RESCHEDULE END =========================================== -->
    <!-- Vendors -->

    <!-- =================================================================================================== CANCEL BOOKING ID002 =========================================== -->
    <div class="modal modal-form fade" id="modalBookingForm4">
        <div class="modal-dialog">
            <div class="modal-content">
                <button aria-label='Close' class='close' data-dismiss='modal'>
                    <i class="icon-error"></i>
                </button>
                <div class="modal-body">
                    <div class="modal-form">
                        <div class="post-text">
                            <form method="post" action="emailsphp/cancel.php" class="contact-form" id="cancelForm">
                                <div class="cancel">
                                    <div class="mt-1">
                                        <p>You can also cancel your appointment online by signing into your online
                                            account. Cancellation under 24 hours notice will incur 50% charge of your
                                            appointment.</p>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group" style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <span>
                                                <i class="icon-user"></i>
                                            </span>
                                            <input name="ca-Fname" type="text" class="form-control"
                                                placeholder="First Name" required />
                                        </div>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group" style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <span>
                                                <i class="icon-user"></i>
                                            </span>
                                            <input name="ca-Lname" type="text" class="form-control"
                                                placeholder="Last Name" required />
                                        </div>
                                    </div>
                                    <div class="row row-sm-space mt-1">
                                        <div class="col">
                                            <div class="input-group"
                                                style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                                <span>
                                                    <i class="icon-email2"></i>
                                                </span>
                                                <input name="ca-mail" type="text" class="form-control"
                                                    placeholder="Your Email" required />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group"
                                                style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                                <span>
                                                    <i class="icon-smartphone"></i>
                                                </span>
                                                <input name="ca-phone" type="text" class="form-control"
                                                    placeholder="Your Phone" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="selectWrapper input-group mt-1">
                                        <span>
                                            <i class="icon-placeholder"></i>
                                        </span>
                                        <select name="ca-salon" class="form-control" required>
                                            <option value="">Choose branch</option>
                                            <option value="Glasgow Fort, Glasgow">Glasgow Fort, Glasgow</option>
                                            <option value="Bonaccord Centre, Aberdeen">Bonaccord Centre, Aberdeen
                                            </option>
                                            <option value="The Thistle Centre, Stirling">The Thistle Centre, Stirling
                                            </option>
                                            <option value="Ocean Terminal, Edinburgh">Ocean Terminal, Edinburgh</option>
                                            <option value="Wellgate Shopping Centre, Dundee">Wellgate Shopping Centre,
                                                Dundee</option>
                                            <option value="Overgate Centre, Dundee">Overgate Centre, Dundee</option>
                                            <option value="Overgate Centre, Dundee">Overgate Centre, Dundee</option>
                                            <option value="Fortkinnaird, Edinburgh">Fortkinnaird, Edinburgh</option>
                                        </select>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group" style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <span>
                                                <i class="icon-clipboard"></i>
                                            </span>
                                            <input name="ca-treatment" type="text" class="form-control"
                                                placeholder="Enter Treatment" required />
                                        </div>
                                    </div>
                                    <div class="row row-sm-space mt-1">
                                        <div class="col-sm-6">
                                            <div class="input-group flex-nowrap"
                                                style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                                <span>
                                                    <i class="icon-calendar2"></i>
                                                </span>
                                                <div class="datepicker-wrap">
                                                    <input name="ca-date" type="text"
                                                        class="form-control datetimepicker" placeholder="Booking Date"
                                                        readonly id="existing" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mt-1 mt-sm-0">
                                            <div class="input-group flex-nowrap"
                                                style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                                <span>
                                                    <i class="icon-clock"></i>
                                                </span>
                                                <div class="datepicker-wrap">
                                                    <input name="ca-time" type="text" class="form-control timepicker"
                                                        placeholder="Booking Time" readonly required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group"
                                            style="height:114px;border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <span>
                                                <i class="icon-pencil-writing"></i>
                                            </span>
                                            <textarea rows="4" name="ca-message" type="text" class="form-control"
                                                placeholder="Additional Details"
                                                style="padding-bottom: 100px;height:100px;" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col mt-1">
                                        <div class="g-recaptcha" data-sitekey="6LfzS34iAAAAACfhVCmaU_a4LNVsKzi2zGR_xAo0"
                                            id="cancelCaptcha" required="required"></div>
                                    </div>
                                    <div class="text-right mt-2">
                                        <button type="submit" class="btn btn-sm btn-hover-fill"
                                            name="send">Submit</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- =================================================================================================== CANCEL BOOKING END =========================================== -->
    <!-- Vendors -->

    <!-- =================================================================================================== NEW BOOKING ID003 =========================================== -->
    <div class="modal modal-form fade" id="modalBookingForm2">
        <div class="modal-dialog">
            <div class="modal-content">
                <button aria-label='Close' class='close' data-dismiss='modal'>
                    <i class="icon-error"></i>
                </button>
                <div class="modal-body">
                    <div class="modal-form">
                        <div class="post-text">
                            <form method="post" action="emailsphp/newbooking.php" class="contact-form" id="newBookingForm">
                                <div class="new-booking" style="overflow-y: scroll;overflow-x: hidden; height: 450px;">
                                    <div class="mt-1">
                                        <p>Do you know you can book online by choosing your date, time, treatment and
                                            preferred therapist. <a
                                                href="https://booking.elegancesalons.co.uk">www.booking.elegancesalons.co.uk</a>
                                        </p>
                                        </br>
                                        <h3>PATCH TEST REQUIREMENT</h3>
                                        <p> We prioritise customers’ safety over
                                            anything. Therefore, we have made
                                            ‘patch test’ a mandatory
                                            requirement, 48 hours prior to
                                            Eyebrow / Eyelash Tinting, Russian
                                            Lashes, Hi-Definition Brows, Lash
                                            Extensions, Lash Lift, and Hair Tint
                                            treatments.</br></br>
                                            If you haven’t done patch test with
                                            us before, or you don’t have any
                                            service history in our system for the
                                            above-mentioned treatments within
                                            last 6 months or if you have had
                                            any changes in your medical history
                                            since you last undergone the
                                            mentioned treatments, you are
                                            required to do a patch test.</br></br>
                                            If you don’t meet these conditions,
                                            we won’t be able to proceed with
                                            the treatments for your own safety.</p>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group" style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <span>
                                                <i class="icon-user"></i>
                                            </span>
                                            <input name="nb-Fname" type="text" class="form-control"
                                                placeholder="First Name" required/>
                                        </div>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group" style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <span>
                                                <i class="icon-user"></i>
                                            </span>
                                            <input name="nb-Lname" type="text" class="form-control"
                                                placeholder="Last Name" required/>
                                        </div>
                                    </div>
                                    <div class="row row-sm-space mt-1">
                                        <div class="col">
                                            <div class="input-group"
                                                style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                                <span>
                                                    <i class="icon-email2"></i>
                                                </span>
                                                <input name="nb-mail" type="text" class="form-control"
                                                    placeholder="Your Email" required/>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group"
                                                style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                                <span>
                                                    <i class="icon-smartphone"></i>
                                                </span>
                                                <input name="nb-phone" type="text" class="form-control"
                                                    placeholder="Your Phone" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="selectWrapper input-group mt-1">
                                        <span>
                                            <i class="icon-placeholder"></i>
                                        </span>
                                        <select name="nb-salon" class="form-control" required>
                                            <option value="">Choose branch</option>
                                            <option value="Glasgow Fort, Glasgow">Glasgow Fort, Glasgow</option>
                                            <option value="Bonaccord Centre, Aberdeen">Bonaccord Centre, Aberdeen
                                            </option>
                                            <option value="The Thistle Centre, Stirling">The Thistle Centre, Stirling
                                            </option>
                                            <option value="Ocean Terminal, Edinburgh">Ocean Terminal, Edinburgh</option>
                                            <option value="Wellgate Shopping Centre, Dundee">Wellgate Shopping Centre,
                                                Dundee</option>
                                            <option value="Overgate Centre, Dundee">Overgate Centre, Dundee</option>
                                            <option value="Overgate Centre, Dundee">Overgate Centre, Dundee</option>
                                            <option value="Fortkinnaird, Edinburgh">Fortkinnaird, Edinburgh</option>
                                        </select>
                                    </div>
                                    <!--<div class="selectWrapper input-group mt-1">-->
                                    <!--		<span>-->
                                    <!--		<i class="icon-clipboard"></i>-->
                                    <!--	</span>-->
                                    <!--	<select name="nb-treatment" class="form-control" >-->
                                    <!--		<option selected="selected" disabled="disabled" value="none">Select Treatment</option>-->
                                    <!--		<option value="dundee">Threading</option>-->
                                    <!--		<option value="stirling">Tinting</option>-->
                                    <!--		<option value="three">Eyebrow Waxing</option>-->
                                    <!--		<option value="Naturopathic">Perfect Brows</option>-->
                                    <!--		<option value="Genetics Tests">Strip Lashes</option>-->
                                    <!--		<option value="Genetics Tests">Party Lashes</option>-->
                                    <!--		<option value="Genetics Tests">Semi Permanent Lashes</option>-->
                                    <!--		<option value="Genetics Tests">Russian Lashes</option>-->
                                    <!--		<option value="Genetics Tests">Lash Lift and Tint</option>-->
                                    <!--		<option value="Genetics Tests">Indian Head Massage</option>-->
                                    <!--		<option value="Genetics Tests">Gel Manicure and Pedicure</option>-->
                                    <!--		<option value="Genetics Tests">Acrylics Extensions</option>-->
                                    <!--		<option value="Genetics Tests">Overlays</option>-->
                                    <!--		<option value="Genetics Tests">Holographic Nails</option>-->
                                    <!--		<option value="Genetics Tests">Chrome Nails</option>-->
                                    <!--		<option value="Genetics Tests">Gel Extension</option>-->
                                    <!--		<option value="Genetics Tests">Waxing</option>-->
                                    <!--		<option value="Genetics Tests">Intimate Waxing</option>-->
                                    <!--		<option value="Genetics Tests">Signature Brows</option>-->
                                    <!--		<option value="Genetics Tests">Manual Tan</option>-->
                                    <!--	</select>-->
                                    <!--</div>-->
                                    <div class="input-group mt-1">
                                        <div class="input-group" style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <span>
                                                <i class="icon-clipboard"></i>
                                            </span>
                                            <input name="nb-treatment" type="text" class="form-control"
                                                placeholder="Enter Treatment" required/>
                                        </div>
                                    </div>
                                    <div class="row row-sm-space mt-1">
                                        <div class="col-sm-6">
                                            <div class="input-group flex-nowrap"
                                                style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                                <span>
                                                    <i class="icon-calendar2"></i>
                                                </span>
                                                <div class="datepicker-wrap">
                                                    <input name="nb-date" type="text"
                                                        class="form-control datetimepicker" placeholder="Date" readonly
                                                        id="existing" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mt-1 mt-sm-0">
                                            <div class="input-group flex-nowrap"
                                                style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                                <span>
                                                    <i class="icon-clock"></i>
                                                </span>
                                                <div class="datepicker-wrap">
                                                    <input name="nb-time" type="text" class="form-control timepicker"
                                                        placeholder="Time" readonly required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group"
                                            style="height:100px;border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <span>
                                                <i class="icon-pencil-writing"></i>
                                            </span>
                                            <textarea rows="4" name="nb-message" type="text" class="form-control"
                                                placeholder="Additional Details"
                                                style="padding-bottom: 100px;height:100px;" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col mt-1">
                                        <div class="g-recaptcha" data-sitekey="6LfzS34iAAAAACfhVCmaU_a4LNVsKzi2zGR_xAo0" id="newBookingCaptcha"
                                            required="required"></div>
                                    </div>
                                    <div class="text-right mt-2">
                                        <button type="submit" class="btn btn-sm btn-hover-fill"
                                            name="send">Submit</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- =================================================================================================== NEW BOOKING END =========================================== -->
    <!-- Vendors -->

    <!-- =================================================================================================== ENQUIRY ID004 =========================================== -->
    <div class="modal modal-form fade" id="modalBookingForm3">
        <div class="modal-dialog">
            <div class="modal-content">
                <button aria-label='Close' class='close' data-dismiss='modal'>
                    <i class="icon-error"></i>
                </button>
                <div class="modal-body">
                    <div class="modal-form">
                        <div class="post-text">
                            <form method="post" action="emailsphp/enquiry.php" class="contact-form" id="enquiryForm">
                                <div class="enquiries ">
                                    <div class="mt-1">
                                        <p>If you are looking for any
                                            information about elegance such
                                            as our opening hours, locations,
                                            facilities in our salon, gift cards,
                                            accepted payment methods,
                                            treatments, patch test
                                            requirements, or after care, you
                                            can check our website. In case you
                                            are unable to find any
                                            information, please contact us
                                            here. We are always there for you.</p>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group" style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <span>
                                                <i class="icon-user"></i>
                                            </span>
                                            <input name="en-Fname" type="text" class="form-control"
                                                placeholder="First Name" required/>
                                        </div>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group" style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <span>
                                                <i class="icon-user"></i>
                                            </span>
                                            <input name="en-Lname" type="text" class="form-control"
                                                placeholder="Last Name" required/>
                                        </div>
                                    </div>
                                    <div class="row row-sm-space mt-1">
                                        <div class="col">
                                            <div class="input-group"
                                                style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                                <span>
                                                    <i class="icon-email2"></i>
                                                </span>
                                                <input name="en-mail" type="text" class="form-control"
                                                    placeholder="Your Email" required/>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group"
                                                style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                                <span>
                                                    <i class="icon-smartphone"></i>
                                                </span>
                                                <input name="en-phone" type="text" class="form-control"
                                                    placeholder="Your Phone" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group">
                                            <span>
                                                <i class="icon-pencil-writing"></i>
                                            </span>
                                            <textarea rows="4" name="en-message" type="text" class="form-control"
                                                placeholder="Additional Details"
                                                style="padding-bottom: 100px;height:100px;" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col mt-1">
                                        <div class="g-recaptcha" data-sitekey="6LfzS34iAAAAACfhVCmaU_a4LNVsKzi2zGR_xAo0" id="enquiryCaptcha"
                                            required="required"></div>
                                    </div>
                                    <div class="text-right mt-2">
                                        <button type="submit" class="btn btn-sm btn-hover-fill" name="send">Submit</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =================================================================================================== ENQUIRY END =========================================== -->
    <!-- Vendors -->

    <!-- =================================================================================================== FEEDBACK ID005 =========================================== -->
    <div class="modal modal-form fade" id="modalBookingForm5">
        <div class="modal-dialog">
            <div class="modal-content">
                <button aria-label='Close' class='close' data-dismiss='modal'>
                    <i class="icon-error"></i>
                </button>
                <div class="modal-body">
                    <div class="modal-form">
                        <div class="post-text">
                            <form method="post" action="emailsphp/feedback.php" class="contact-form" enctype="multipart/form-data" id="feedbackForm">
                                <div class="feedback" style="overflow-y: scroll;overflow-x: hidden; height: 450px;">
                                    <div class="mt-1">
                                        <p>
                                            We work passionately to provide you the highest
                                            satisfaction. But, if you are not satisfied with our
                                            service, we are very sorry!
                                            </br></br>
                                            Please contact us here explaining the reason for your
                                            dissatisfaction and provide images of your treatments,
                                            so that we can assess our service and rectify it for you.
                                            Tweaks and adjustments will be honoured within 3
                                            days from your initial treatment date.
                                            </br></br>
                                            Please note that we can’t offer cash refunds on any
                                            treatments, but we will investigate your concern
                                            immediately and do the needful to satisfy you.
                                            </br></br>
                                            You have elegance’s assurance.
                                        </p>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group" style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <span>
                                                <i class="icon-user"></i>
                                            </span>
                                            <input name="fe-Fname" type="text" class="form-control"
                                                placeholder="First Name" required/>
                                        </div>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group" style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <span>
                                                <i class="icon-user"></i>
                                            </span>
                                            <input name="fe-Lname" type="text" class="form-control"
                                                placeholder="Last Name" required/>
                                        </div>
                                    </div>
                                    <div class="row row-sm-space mt-1">
                                        <div class="col">
                                            <div class="input-group"
                                                style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                                <span>
                                                    <i class="icon-email2"></i>
                                                </span>
                                                <input name="fe-mail" type="text" class="form-control"
                                                    placeholder="Your Email" required/>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group"
                                                style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                                <span>
                                                    <i class="icon-smartphone"></i>
                                                </span>
                                                <input name="fe-phone" type="text" class="form-control"
                                                    placeholder="Your Phone" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="selectWrapper input-group mt-1">
                                        <span>
                                            <i class="icon-placeholder"></i>
                                        </span>
                                        <select name="fe-salon" class="form-control" required>
                                            <option value="">Choose branch</option>
                                            <option value="Glasgow Fort, Glasgow">Glasgow Fort, Glasgow</option>
                                            <option value="Bonaccord Centre, Aberdeen">Bonaccord Centre, Aberdeen
                                            </option>
                                            <option value="The Thistle Centre, Stirling">The Thistle Centre, Stirling
                                            </option>
                                            <option value="Ocean Terminal, Edinburgh">Ocean Terminal, Edinburgh</option>
                                            <option value="Wellgate Shopping Centre, Dundee">Wellgate Shopping Centre,
                                                Dundee</option>
                                            <option value="Overgate Centre, Dundee">Overgate Centre, Dundee</option>
                                            <option value="Fortkinnaird, Edinburgh">Fortkinnaird, Edinburgh</option>
                                        </select>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group" style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <span>
                                                <i class="icon-clipboard"></i>
                                            </span>
                                            <input name="fe-treatment" type="text" class="form-control"
                                                placeholder="Enter Treatment Booked" required/>
                                        </div>
                                    </div>
                                    <div class="row row-sm-space mt-1">
                                        <div class="col-sm-6">
                                            <div class="input-group flex-nowrap"
                                                style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                                <span>
                                                    <i class="icon-calendar2"></i>
                                                </span>
                                                <div class="datepicker-wrap">
                                                    <input name="fe-date" type="text"
                                                        class="form-control datetimepicker" placeholder="Booking Date"
                                                        readonly id="existing" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mt-1 mt-sm-0">
                                            <div class="input-group flex-nowrap"
                                                style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                                <span>
                                                    <i class="icon-clock"></i>
                                                </span>
                                                <div class="datepicker-wrap">
                                                    <input name="fe-time" type="text" class="form-control timepicker"
                                                        placeholder="Booking Time" readonly required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group" style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <input type="file" name="fe-attachment[]" multiple="multiple" class="form-control" placeholder="Enter Treatment Booked">
                                                <label>You can upload multiple images</label>
                                        </div>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group"
                                            style="height:114px;border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <span>
                                                <i class="icon-pencil-writing"></i>
                                            </span>
                                            <textarea rows="4" name="fe-message" type="text" class="form-control"
                                                placeholder="Additional Details"
                                                style="padding-bottom: 100px;height:100px;" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col mt-1">
                                        <div class="g-recaptcha" data-sitekey="6LfzS34iAAAAACfhVCmaU_a4LNVsKzi2zGR_xAo0" id="feedbackCaptcha"
                                            required="required"></div>
                                    </div>
                                    <div class="text-right mt-2">
                                        <button type="submit" class="btn btn-sm btn-hover-fill" name="send">Submit</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =================================================================================================== FEEDBACK END =========================================== -->
    <!-- Vendors -->

     <!-- =================================================================================================== GIFT CARD ID006 =========================================== -->
    <div class="modal modal-form fade" id="modalBookingForm7">
        <div class="modal-dialog">
            <div class="modal-content">
                <button aria-label='Close' class='close' data-dismiss='modal'>
                    <i class="icon-error"></i>
                </button>
                <div class="modal-body">
                    <div class="modal-form">
                        <div class="post-text">
                            <form method="post" action="emailsphp/giftcard.php" class="contact-form" enctype="multipart/form-data" id="giftcardForm">
                                <div class="gift-card" style="overflow-y: scroll;overflow-x: hidden; height: 450px;">
                                    <div class="mt-1">
                                        <p>You can buy our gorgeous looking gift
                                            cards only from our salons. But an eversion of gift cards are also available
                                            at:
                                            <a
                                                href="www.elegancesalons/giftcards_.html">www.elegancesalons/giftcards</a>
                                            </br></br>
                                            Our gift cards are valid for 180 days from
                                            the date of your purchase. Please note
                                            that we are unable to accept any expired
                                            gift cards.
                                            </br></br>
                                            If you need further information about gift
                                            cards or want to enquire about your gift
                                            card balance or expiry date, please
                                            contact us below.
                                        </p>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group" style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <span>
                                                <i class="icon-user"></i>
                                            </span>
                                            <input name="gi-Fname" type="text" class="form-control"
                                                placeholder="First Name" required/>
                                        </div>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group" style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <span>
                                                <i class="icon-user"></i>
                                            </span>
                                            <input name="gi-Lname" type="text" class="form-control"
                                                placeholder="Last Name" required/>
                                        </div>
                                    </div>
                                    <div class="row row-sm-space mt-1">
                                        <div class="col">
                                            <div class="input-group"
                                                style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                                <span>
                                                    <i class="icon-email2"></i>
                                                </span>
                                                <input name="gi-mail" type="text" class="form-control"
                                                    placeholder="Your Email" required/>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group"
                                                style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                                <span>
                                                    <i class="icon-smartphone"></i>
                                                </span>
                                                <input name="gi-phone" type="text" class="form-control"
                                                    placeholder="Your Phone" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group" style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <span>
                                                <i class="icon-user2"></i>
                                            </span>
                                            <input name="gi-giftedby" type="text" class="form-control"
                                                placeholder="Gifted by" required/>
                                        </div>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group" style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <span>
                                                <i class="icon-news-13"></i>
                                            </span>
                                            <input name="gi-cardno" type="text" class="form-control"
                                                placeholder="Gift card number (behind the card )" required/>
                                        </div>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group" style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <input type="file" name="gi-attachment" class="form-control">
                                                <label>Upload Image</label>
                                        </div>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group"
                                            style="height:114px;border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <span>
                                                <i class="icon-pencil-writing"></i>
                                            </span>
                                            <textarea rows="4" name="gi-message" type="text" class="form-control"
                                                placeholder="Additional Details"
                                                style="padding-bottom: 100px;height:100px;" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col mt-1">
                                        <div class="g-recaptcha" data-sitekey="6LfzS34iAAAAACfhVCmaU_a4LNVsKzi2zGR_xAo0" id="giftcardCaptcha"
                                            required="required"></div>
                                    </div>
                                    <div class="text-right mt-2">
                                        <button type="submit" class="btn btn-sm btn-hover-fill" name="send">Submit</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =================================================================================================== GIFT CARD END =========================================== -->
    <!-- Vendors -->

    <!-- =================================================================================================== OPPURTUNITY/BUSINESS ID007 =========================================== -->
    <div class="modal modal-form fade" id="modalBookingForm6">
        <div class="modal-dialog">
            <div class="modal-content">
                <button aria-label='Close' class='close' data-dismiss='modal'>
                    <i class="icon-error"></i>
                </button>
                <div class="modal-body">
                    <div class="modal-form">
                        <div class="post-text">
                            <form method="post" action="emailsphp/opportunity.php" class="contact-form" enctype="multipart/form-data" id="opportunityForm">
                                <div class="opportunity" style="overflow-y: scroll;overflow-x: hidden; height: 450px;">
                                    <div class="mt-1">
                                        <p>Elegance salons are forward looking and ambitious company. We invite offers
                                            from suppliers, investors, landlords, leasing agents etc..</p>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group" style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <span>
                                                <i class="icon-user"></i>
                                            </span>
                                            <input name="bu-Fname" type="text" class="form-control"
                                                placeholder="First Name" required/>
                                        </div>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group" style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <span>
                                                <i class="icon-user"></i>
                                            </span>
                                            <input name="bu-Lname" type="text" class="form-control"
                                                placeholder="Last Name" required/>
                                        </div>
                                    </div>
                                    <div class="row row-sm-space mt-1">
                                        <div class="col">
                                            <div class="input-group"
                                                style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                                <span>
                                                    <i class="icon-email2"></i>
                                                </span>
                                                <input name="bu-mail" type="text" class="form-control"
                                                    placeholder="Your Email" required/>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group"
                                                style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                                <span>
                                                    <i class="icon-smartphone"></i>
                                                </span>
                                                <input name="bu-phone" type="text" class="form-control"
                                                    placeholder="Your Phone" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group" style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <span>
                                                <i class="icon-office"></i>
                                            </span>
                                            <input name="bu-company" type="text" class="form-control"
                                                placeholder="Your Company" required/>
                                        </div>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group" style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <span>
                                                <i class="icon-team"></i>
                                            </span>
                                            <input name="bu-position" type="text" class="form-control"
                                                placeholder="Your Position" required/>
                                        </div>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group" style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <span>
                                                <i class="icon-question"></i>
                                            </span>
                                            <input name="bu-opportunity" type="text" class="form-control"
                                                placeholder="Opportunity for" required/>
                                        </div>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group" style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <input type="file" name="bu-attachment" class="form-control">
                                                <label>Upload brochure</label>
                                        </div>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group"
                                            style="height:114px;border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <span>
                                                <i class="icon-pencil-writing"></i>
                                            </span>
                                            <textarea rows="4" name="bu-message" type="text" class="form-control"
                                                placeholder="Additional Details"
                                                style="padding-bottom: 100px;height:100px;" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col mt-1">
                                        <div class="g-recaptcha" data-sitekey="6LfzS34iAAAAACfhVCmaU_a4LNVsKzi2zGR_xAo0" id="opportunityCaptcha"
                                            required="required"></div>
                                    </div>
                                    <div class="text-right mt-2">
                                        <button type="submit" class="btn btn-sm btn-hover-fill" name="send">Submit</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =================================================================================================== OPPURTUNITY/BUSINESS END =========================================== -->
    <!-- Vendors -->

    <!-- =================================================================================================== JOB ID008 =========================================== -->
    <div class="modal modal-form fade" id="modalBookingForm8">
        <div class="modal-dialog">
            <div class="modal-content">
                <button aria-label='Close' class='close' data-dismiss='modal'>
                    <i class="icon-error"></i>
                </button>
                <div class="modal-body">
                    <div class="modal-form">
                        <div class="post-text">
                            <form method="post" action="emailsphp/jobvacancy.php" class="contact-form" enctype="multipart/form-data" id="jobvacancyForm">
                                <div class="job-vacancy" style="overflow-y: scroll;overflow-x: hidden; height: 450px;">
                                    <div class="input-group mt-1">
                                        <div class="input-group" style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <span>
                                                <i class="icon-user"></i>
                                            </span>
                                            <input name="jo-Fname" type="text" class="form-control"
                                                placeholder="First Name" required/>
                                        </div>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group" style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <span>
                                                <i class="icon-user"></i>
                                            </span>
                                            <input name="jo-Lname" type="text" class="form-control"
                                                placeholder="Last Name" required/>
                                        </div>
                                    </div>
                                    <div class="row row-sm-space mt-1">
                                        <div class="col">
                                            <div class="input-group"
                                                style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                                <span>
                                                    <i class="icon-email2"></i>
                                                </span>
                                                <input name="jo-mail" type="text" class="form-control"
                                                    placeholder="Your Email" required/>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group"
                                                style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                                <span>
                                                    <i class="icon-smartphone"></i>
                                                </span>
                                                <input name="jo-phone" type="text" class="form-control"
                                                    placeholder="Your Phone" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="selectWrapper input-group mt-1">
                                        <span>
                                            <i class="icon-placeholder"></i>
                                        </span>
                                        <select name="jo-salon" class="form-control" id="jo-salonId" required>
                                            <option value="">Choose branch</option>
                                            <option value="Glasgow Fort, Glasgow">Glasgow Fort, Glasgow</option>
                                            <option value="Bonaccord Centre, Aberdeen">Bonaccord Centre, Aberdeen
                                            </option>
                                            <option value="The Thistle Centre, Stirling">The Thistle Centre, Stirling
                                            </option>
                                            <option value="Ocean Terminal, Edinburgh">Ocean Terminal, Edinburgh</option>
                                            <option value="Wellgate Shopping Centre, Dundee">Wellgate Shopping Centre,
                                                Dundee</option>
                                            <option value="Overgate Centre, Dundee">Overgate Centre, Dundee</option>
                                            <option value="Overgate Centre, Dundee">Overgate Centre, Dundee</option>
                                            <option value="Fortkinnaird, Edinburgh">Fortkinnaird, Edinburgh</option>
                                        </select>
                                    </div>
                                    <div class="selectWrapper input-group mt-1">
                                        <span>
                                            <i class="icon-team"></i>
                                        </span>
                                        <select name="jo-position" class="form-control" id="jo-positionId" required>
                                            <option selected="selected" disabled="disabled" value="">Choose Position
                                            </option>
                                            <option value="Brow & Nail Technician">Brow & Nail Technician</option>
                                            <option value="Hair Stylist">Hair Stylist</option>
                                            <option value="Beauty Therapist">Beauty Therapist</option>
                                        </select>
                                    </div>
                                    <div class="selectWrapper input-group mt-1">
                                        <span>
                                            <i class="icon-library"></i>
                                        </span>
                                        <select name="jo-quali" class="form-control" id="jo-qualificationId" required>
                                            <option selected="selected" disabled="disabled" value="">Choose
                                                Qualification</option>
                                            <option value="Beauty Qualified">Beauty Qualified</option>
                                            <option value="Fast Track Qualified">Fast Track Qualified</option>
                                            <option value="Experienced">Experienced</option>
                                        </select>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group" style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <span>
                                                <i class="icon-world"></i>
                                            </span>
                                            <input name="jo-country" type="text" class="form-control"
                                                placeholder="Qualified Country" required/>
                                        </div>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group" style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <span>
                                                <i class="icon-care"></i>
                                            </span>
                                            <input name="jo-exp" type="text" class="form-control"
                                                placeholder="Experience after Qualification (Y/M)" required/>
                                        </div>
                                    </div>
                                    <div class="selectWrapper input-group mt-1">
                                        <span>
                                            <i class="icon-copy"></i>
                                        </span>
                                        <select name="jo-eligibility" class="form-control" id="jo-eligibilityId" required>
                                            <option selected="selected" disabled="disabled" value="">Choose Eligibility
                                                to work in UK</option>
                                            <option value="British Citizen">British Citizen</option>
                                            <option value="Indefinite Leave to Remain">Indefinite Leave to Remain
                                            </option>
                                            <option value="Other Valid Visa">Other Valid Visa</option>
                                        </select>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group flex-nowrap"
                                            style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <span>
                                                <i class="icon-calendar2"></i>
                                            </span>
                                            <div class="datepicker-wrap">
                                                <input name="jo-dob" type="text" class="form-control datetimepicker"
                                                    placeholder="DOB" readonly id="existing" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="selectWrapper input-group mt-1">
                                        <span>
                                            <i class="icon-hand"></i>
                                        </span>
                                        <select name="jo-treatment" class="form-control" id="jo-treatmentId" required>
                                            <option selected="selected" disabled="disabled" value="none">Treatments you
                                                are confident with</option>
                                            <option value="Threading">Threading </option>
                                            <option value="Tinting">Tinting </option>
                                            <option value="Waxing">Waxing </option>
                                        </select>
                                    </div>
                                    <div class="selectWrapper input-group mt-1">
                                        <span>
                                            <i class="icon-clock"></i>
                                        </span>
                                        <select name="jo-pref" class="form-control" id="jo-prefjobId" required>
                                            <option selected="selected" disabled="disabled" value="none">Prefered Job
                                            </option>
                                            <option value="Full time">Full Time</option>
                                            <option value="Part time">Part Time </option>
                                        </select>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group" style="border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <input type="file" name="jo-attachment" class="form-control" placeholder="Upload CV" required>
                                                <label>UploadCV</label>
                                        </div>
                                    </div>
                                    <div class="input-group mt-1">
                                        <div class="input-group"
                                            style="height:114px;border: 2px solid #d5d5d5;border-radius: 5px;">
                                            <span>
                                                <i class="icon-pencil-writing"></i>
                                            </span>
                                            <textarea rows="4" name="jo-message" type="text" class="form-control"
                                                placeholder="Additional Details"
                                                style="padding-bottom: 100px;height:100px;" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col mt-1">
                                        <div class="g-recaptcha" data-sitekey="6LfzS34iAAAAACfhVCmaU_a4LNVsKzi2zGR_xAo0" id="jobvacancyCaptcha"
                                            required="required"></div>
                                    </div>
                                    <div class="text-right mt-2">
                                        <button type="submit" class="btn btn-sm btn-hover-fill" name="send">Submit</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =================================================================================================== JOB END =========================================== -->
    <!-- Vendors -->

    <div class="modal modal-form fade" id="modalBookingForm7">
        <div class="modal-dialog">
            <div class="modal-content">
                <button aria-label='Close' class='close' data-dismiss='modal'>
                    <i class="icon-error"></i>
                </button>
                <div class="modal-body">
                    <div class="modal-form">
                        <div class="post-text">
                            <h3>PATCH TEST REQUIREMENT</h3>
                            <p> We prioritise customers’ safety over
                                anything. Therefore, we have made
                                ‘patch test’ a mandatory
                                requirement, 48 hours prior to
                                Eyebrow / Eyelash Tinting, Russian
                                Lashes, Hi-Definition Brows, Lash
                                Extensions, Lash Lift, and Hair Tint
                                treatments.</br></br>
                                If you haven’t done patch test with
                                us before, or you don’t have any
                                service history in our system for the
                                above-mentioned treatments within
                                last 6 months or if you have had
                                any changes in your medical history
                                since you last undergone the
                                mentioned treatments, you are
                                required to do a patch test.</br></br>
                                If you don’t meet these conditions,
                                we won’t be able to proceed with
                                the treatments for your own safety.</p>
                            </br>
                            <!--<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1"> I agree with the terms and conditions</label><br>
							</br>-->
                            <a href="https://elegancesalon.zenoti.com/webstoreNew/sales/seriespackage/ca45f812-63d3-4443-abcd-e19e15e51b07"
                                class="btn mt-3"><i class="icon-right-arrow"></i><span>Agree and Continue</span><i
                                    class="icon-right-arrow"></i></a>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendors -->
@endsection