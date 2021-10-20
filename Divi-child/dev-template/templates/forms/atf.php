<form method="post" enctype="multipart/form-data" target="gform_ajax_frame_2" id="gform_2" action="">
    <div class="field-full-name field template-row template-no-gutters">
        <div class="first-name-container template-col-6">
            <div>
                <input type="text" name="first_name" class="first-name" placeholder="First">
            </div>
        </div>
        <div class="last-name-container template-col-6">
            <div>
                <input type="text" name="last_name" class="last-name" placeholder="Last">
            </div>
        </div>
    </div>
    <div class="field-phone field">
        <div class="phone-container">
            <input type="number" name="phone" class="phone" placeholder="Phone">
        </div>
    </div>
    <div class="field-email field">
        <div class="email-container">
            <input type="email" name="email" class="email" placeholder="Email">
        </div>
    </div>
    <div class="field-sevices-offered field">
        <div class="address-country">
            <select name="country" id="country" aria-required="true">
               <option value="" selected="selected">Services Offered</option>
               <option value="Service 1">Service 1</option>
               <option value="Service 2">Service 2</option>
               <option value="Service 3">Service 3</option>
            </select>
        </div>
    </div>
    <div class="field-message field">
        <div class="message-container">
            <textarea class="message" placeholder="Message"></textarea>
        </div>
    </div>
    <div class="field-submit field">
        <div class="message-container">
            <input class="button float-left" type="submit" name="submit" value="Submit">
        </div>
    </div>
</form>