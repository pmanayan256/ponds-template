<form id="atf-form" method="post" enctype="multipart/form-data" target="gform_ajax_frame_2" id="gform_2" action="">
    <div class="field-full-name field template-row template-no-gutters required">
        <h5 class="required text-italic">(Required)</h5>
    </div>
    <div class="field-full-name field template-row template-no-gutters grid grid-template-6-12 mb-10">
        <div class="first-name-container template-col-6 mr-10">
            <div>
                <input type="text" name="first_name" class="first-name text-bold" placeholder="First">
            </div>
        </div>
        <div class="last-name-container template-col-6">
            <div>
                <input type="text" name="last_name" class="last-name text-bold" placeholder="Last">
            </div>
        </div>
    </div>
    <div class="field-phone field mb-10">
        <div class="phone-container">
            <input type="number" name="phone" class="phone text-bold" placeholder="Phone">
        </div>
    </div>
    <div class="field-email field mb-10">
        <div class="email-container">
            <input type="email" name="email" class="email text-bold" placeholder="Email">
        </div>
    </div>
    <div class="field-full-name field template-row template-no-gutters required mt-10 mt-15">
        <h5 class="required text-italic">(Required)</h5>
    </div>
    <div class="field-sevices-offered field mb-10">
        <div class="address-country">
            <select name="country" id="country" aria-required="true" class="font-15 text-bold w-full bg-eee border-width-1 border-color-eee p-15 cursor-pointer">
               <option value="" selected="selected">Services Offered</option>
               <option value="Service 1">Service 1</option>
               <option value="Service 2">Service 2</option>
               <option value="Service 3">Service 3</option>
            </select>
        </div>
    </div>
    <div class="field-message field mb-10">
        <div class="message-container">
            <textarea class="font-15 message w-full p-15 bg-eee border-width-1 border-color-eee height-250 text-bold" placeholder="Message"></textarea>
        </div>
    </div>
    <div class="field-submit field">
        <div class="message-container">
            <input class="button float-left bg-024B79 cursor-pointer font-25 text-uppercase text-white" type="submit" name="submit" value="Submit">
        </div>
    </div>
</form>