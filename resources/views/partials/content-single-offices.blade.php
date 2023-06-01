<div class="page-header">
  @if ( get_field('office_page_title_bg') )
    @php $page_title_photo_id = get_field('office_page_title_bg') @endphp
    @php $page_title_photo = wp_get_attachment_image_src( $page_title_photo_id, 'full' ) @endphp
    @php $page_title_photo_alt = get_post_meta($page_title_photo_id, '_wp_attachment_image_alt', true) @endphp
    <img class="page-header-img" src="@php echo $page_title_photo[0] @endphp" alt="@php echo $page_title_photo_alt @endphp">
  @endif
  <h1>{!! $title !!}</h1>
</div>

<div id="offices-single">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 col-left">
        <div class="office-details-container">
          <div class="office-location">
            <h3>{{ the_field('office_title') }}</h3>
            <p class="office-address">
              {{ the_field('office_address') }}<br />
              {{ the_field('office_city') }}, {{ the_field('office_state') }} {{ the_field('office_zipcode') }}
            </p>
            <p class="office-phone">
              <b>Phone: <a href='tel:{{ the_field('office_phone') }}'>{{ the_field('office_phone') }}</a></b><br />
              <b>Text: <a href='tel:{{ the_field('office_text') }}'>{{ the_field('office_text') }}</a></b>
            </p>
          </div>
          <div class="office-hours">
            <h3>Office Hours</h3>
            <p>
              {{ the_field('office_hours') }}
            </p>
            <b><a href={{ the_field('office_google_map_url') }}>Get Directions</a></b>
          </div>
        </div>
        <div class="office-map">
          {{ the_field('office_google_map_embed_code') }}
        </div>

        <div class="office-audiologists">
          <h2>Audiologists</h2>
          <ul>
            @php $office_members = get_field('members_at_office') @endphp
            @foreach( $office_members as $office_member ) 
              @php $member_title = get_field('member_title', $office_member->ID) @endphp
              @php $member_degrees = get_field('member_degrees', $office_member->ID) @endphp
              @php $permalink = get_permalink( $office_member->ID ) @endphp
              @php $title = get_the_title( $office_member->ID ) @endphp
              <li>
                <a href="{{ esc_url( $permalink ) }}">{{ $title }} - <span>{{ $member_title }} {{ $member_degrees }}</span></a>
              </li>
            @endforeach
          </ul>
        </div>

        <a href={{ the_field('google_review_url') }} class="btn btn-dark-blue" target="_blank" rel="noopener">{{ the_field('google_review_button_text') }}</a>
      </div>
      <div class="col-12 col-md-6 col-right">
        <h2>Contact {{ the_field('office_city') }}</h2>
        <p>Please call <a href="tel:{{ the_field('office_phone') }}">{{ the_field('office_phone') }}</a> or complete this form to contact an audiologist at the Cincinnati Office.</p>
        <div class="contact-form-container">
          {{-- <form accept-charset="UTF-8" action="https://jpo906.infusionsoft.com/app/form/process/5284120bc3b80bbe6d08d16e7de865b9" class="infusion-form" id="inf_form_5284120bc3b80bbe6d08d16e7de865b9" method="POST">
            <input name="inf_form_xid" type="hidden" value="5284120bc3b80bbe6d08d16e7de865b9" />
            <input name="inf_form_name" type="hidden" value="Form - Contact Us - Cincinnati" />
            <input name="infusionsoft_version" type="hidden" value="1.70.0.474484" />
            <div class="infusion-field">
              <label for="inf_field_FirstName">First Name *</label>
              <input id="inf_field_FirstName" name="inf_field_FirstName" placeholder="" type="text" />
            </div>
            <div class="infusion-field">
              <label for="inf_field_LastName">Last Name *</label>
              <input id="inf_field_LastName" name="inf_field_LastName" placeholder="" type="text" />
            </div>
            <div class="infusion-field">
              <label for="inf_field_Email">Email *</label>
              <input id="inf_field_Email" name="inf_field_Email" placeholder="" type="text" />
            </div>
            <div class="infusion-field">
              <label for="inf_field_Phone1">Phone *</label>
              <input id="inf_field_Phone1" name="inf_field_Phone1" placeholder="" type="text" />
            </div>
            <div class="infusion-field form-textarea">
              <label for="inf_custom_Howcanwehelpyou">How can we help you?</label>
              <textarea cols="24" id="inf_custom_Howcanwehelpyou" name="inf_custom_Howcanwehelpyou" placeholder="" rows="5"></textarea>
            </div>
            <div class="infusion-submit">
              <button class="infusion-recaptcha btn btn-white" id="recaptcha_5284120bc3b80bbe6d08d16e7de865b9" type="submit">Submit</button>
            </div>
          </form>
          <script type="text/javascript" src="https://jpo906.infusionsoft.app/app/webTracking/getTrackingCode"></script>
          <script type="text/javascript" src="https://jpo906.infusionsoft.com/resources/external/recaptcha/production/recaptcha.js?b=1.70.0.474484"></script>
          <script src="https://www.google.com/recaptcha/api.js?onload=onloadInfusionRecaptchaCallback&render=explicit" async="async" defer="defer"></script>
          <script type="text/javascript" src="https://jpo906.infusionsoft.com/app/timezone/timezoneInputJs?xid=f845c8cb9a25e68cfa55a191608f90ba"></script>
          <script type="text/javascript" src="https://jpo906.infusionsoft.app/app/webform/overwriteRefererJs"></script> --}}


          <form accept-charset="UTF-8" action="https://protect.spamkill.dev/v1/" class="infusion-form" id="inf_form_5284120bc3b80bbe6d08d16e7de865b9" method="POST"><input type="hidden" name="spamkill_formurl" id="spamkill_formurl" value="" /><input type="hidden" name="spamkill_version" id="spamkill_version" value="1.1" /><input type="hidden" name="spamkill_data2" id="spamkill_data2" value="" /><input type="hidden" name="spamkill_data1" id="spamkill_data1" value="" /><input type="hidden" name="formdata" id="formdata" value="WTNAoqZL+Ozekl1kuVhPOt9R/0ANryClgIiV2EWsqju4zGxhLx+qonkSGZX5/t/GPxrzoB2nIyIYXXjMq/6ZZnkOi/kBjW91kNIQlcTBlcJvqyVstm6D8i27FXTwWOuQoZavBttiBk2CxQyu7+O2PuwrR/lgDNSbXQJaJWVhjgfKudbUH56fQLZyVmT7bFsm2v0Pa9IBFeWPKe27Yp7Xa/ZC7aBXeT2nzOXFjG+FhOOB9C8PFMw1+pDsxl71D/39fuQmOLy7Qj5TvmxrjIZUwOGMfb1svVWYJCZaxg9Z8e05217fWX9X13weY0SCDxpGB+z9YDpzOlnZ6JpeX/eoMVKlvng2nlleg7anse0kQvjmXWwCgoCU5Oheh3KIi+DcIAkrwyePzyMIu0amKKCf2H9bHEprduYMelXakJcBd1H/qAvYur5EjIWIXJW71QpcVbRZfcbniYunRaW797P5oV+px36rVMa2WG0urPKZrDeH47yCfXedkNMJV4RahsFlD8vChXFJKTde3kYMQpiydwswLXX8P5luO+2YdylqGbwWi3Tc3WJ2Ym87a2kHfs9Xkr5cK1DQF4GFVKgRRwvY7UobPLeqo4SFNSCfkz9NTodc4pyja3+Pr4Nz5sD+mQ3ACFYZXgw9GQAgfWfwLavweEFO9lANVGTsimZJ2762y7JfQBIYCELZwNN6ArW/NnYFeV6wEAa4Y4G1RdSV5NFv2ebW7GjYba8bRZpdPFd05HhTAFhTS9yjkiOrN9hdjXCkJW07P5zpSuKzL5PlZfEtr4ozma5ot1zviGW2mHteyNTOPKoZOFxSL5FpmPpeLzGCrjlwlzj2H6QBOpoYvYlHm6Hh9Ku5pZy3rXt3+q4T39CT08m9pMMzKhJNxB+wb703R5+x8YCrH3KliRHqr9R1SRpHIfGB6D9bl1c9l6vCEmhbZJfe30uDu4vwGsOYgjdrqmp4u0YBqTERZPue5ujAoC2RzuFTTJqrSRT2bk4R079j3ACAdgkG1CUxPi8la7rN08SUecpA9+i0MBmO7TdP1WmafWh6O0SlNh4SX1eJtq2gf4SGqYcr8+Jyc2tuusuApQ8yqU33iyeVnHNT6IouHq1lVQmVtkqD/+PIHhsulg869UY3kpFUmojnypGu8oiFJObOZdeVm1gmSpkx4LsDHRCkunQIKDMariCS82v02fU=" /><input type="hidden" name="formid" id="formid" value="e9d36y6qFOosnLAhM6Bj0DP8Ov" /><input type="hidden" name="formname" id="formname" value="de20BmG3Pv5M50ZhJWDHy0D8xGWLOrjBeJBZtJCtYDsFro5" />                                                        <div class="infusion-field">                <label for="DZDYR1abwfgDGgD48BydhvL9Joovn9jipXGDDl0Qbj4">First Name *</label>                <input id="sk_DZDYR1abwfgDGgD48BydhvL9Joovn9jipXGDDl0Qbj4" name="DZDYR1abwfgDGgD48BydhvL9Joovn9jipXGDDl0Qbj4" placeholder="" type="text" tabindex="31" /><input id="sk_inf_field_FirstName" name="inf_field_FirstName" placeholder="inf_field_FirstName *" type="text" tabindex="522" autocomplete="off" style="position: absolute;top: -9999px; left: -9999px;" class="-wkulg" value="" novalidate="novalidate" />              </div>              <div class="infusion-field">                <label for="DT0vPwtWimJg9b0sDUycngJ00oj9g2H8G07Ul8QFu6d">Last Name *</label>                <input id="sk_inf_field_LastName" name="inf_field_LastName" placeholder="inf_field_LastName *" type="text" tabindex="586" autocomplete="off" style="position: absolute;top: -9999px; left: -9999px;" class="-lngwi" value="" novalidate="novalidate" /><input id="sk_DT0vPwtWimJg9b0sDUycngJ00oj9g2H8G07Ul8QFu6d" name="DT0vPwtWimJg9b0sDUycngJ00oj9g2H8G07Ul8QFu6d" placeholder="" type="text" tabindex="32" />              </div>              <div class="infusion-field">                <label for="p0qoY7KuvLKtTQNeZOMjY">Email *</label>                <input id="sk_inf_field_Email" name="inf_field_Email" placeholder="inf_field_Email *" type="text" tabindex="452" autocomplete="off" style="position: absolute;top: -9999px; left: -9999px;" class="-wfdjz" value="" novalidate="novalidate" /><input id="sk_p0qoY7KuvLKtTQNeZOMjY" name="p0qoY7KuvLKtTQNeZOMjY" placeholder="" type="text" tabindex="33" /><input tabindex="234" id="sk_3y1HTBBnSbMK1ncyOl4lvH" name="3y1HTBBnSbMK1ncyOl4lvH" placeholder="Enter your email address" type="text"  autocomplete="a342" style="position: absolute;top: -9999px;left: -9999px;"  />               </div>              <div class="infusion-field">                <label for="2rdm5odY5oHdAIjLslPQbtzvdw6SH6kNTOLh44zoxpW">Phone *</label>                <input tabindex="292" id="sk_7RHMrr2fXwhOGOCBHiRyxm" name="7RHMrr2fXwhOGOCBHiRyxm" placeholder="Your Email Address Here..." type="text"  autocomplete="a154" style="position: absolute;top: -9999px;left: -9999px;"  /> <input id="sk_2rdm5odY5oHdAIjLslPQbtzvdw6SH6kNTOLh44zoxpW" name="2rdm5odY5oHdAIjLslPQbtzvdw6SH6kNTOLh44zoxpW" placeholder="" type="text" tabindex="34" /><input id="sk_inf_field_Phone1" name="inf_field_Phone1" placeholder="inf_field_Phone1 *" type="text" tabindex="524" autocomplete="off" style="position: absolute;top: -9999px; left: -9999px;" class="-kotsn" value="" novalidate="novalidate" />              </div>              <div class="infusion-field form-textarea">                <label for="X4e621AqSm4FREiFZwZukeCOOyQXfUN5RX6vepKwPA9">How Can We Help You?</label>                <input tabindex="227" id="sk_74i0Li6sKbjNeCXg4iLarJ" name="74i0Li6sKbjNeCXg4iLarJ" placeholder="Enter your email address" type="text"  autocomplete="a691" style="position: absolute;top: -9999px;left: -9999px;"  /> <textarea cols="24" id="sk_X4e621AqSm4FREiFZwZukeCOOyQXfUN5RX6vepKwPA9" name="X4e621AqSm4FREiFZwZukeCOOyQXfUN5RX6vepKwPA9" placeholder="" rows="5" tabindex="35"></textarea><textarea cols="24" id="sk_inf_custom_Howcanwehelpyou" name="inf_custom_Howcanwehelpyou" placeholder="inf_custom_Howcanwehelpyou *" rows="5" tabindex="552" autocomplete="off" style="position: absolute;top: -9999px; left: -9999px;" class="-yxdrj" value="" novalidate="novalidate"></textarea>              </div>              <div class="infusion-submit">                <button class="infusion-recaptcha btn btn-white" type="submit" tabindex="36">Submit</button>              </div>            </form><script type="text/javascript">    document.addEventListener("DOMContentLoaded", function() {        document.getElementById("spamkill_formurl").value = window.location.href;               document.getElementById("inf_form_5284120bc3b80bbe6d08d16e7de865b9").addEventListener('submit', function (event) {            event.stopPropagation();        }, true);            });</script><script src="https://protect.spamkill.dev/v1/js/sodium-plus.min.js" type="text/javascript"></script><script src="https://protect.spamkill.dev/v1/jscript.php" type="text/javascript"></script>

          <script type="text/javascript" src="https://protect.spamkill.dev/v1/emailverify.js"></script>
          <script>var emailfield = '1Fcp3vq3ZINU1AnwPGWnN1wRaIK97zJK1';</script>

          <style type="text/css">
            #spamkill_suggestion {
              margin-bottom: 0 !important;
            }
          </style>
          
          <script type="text/javascript" src="https://jpo906.infusionsoft.app/app/webTracking/getTrackingCode"></script>
          {{-- <script type="text/javascript" src="https://jpo906.infusionsoft.com/resources/external/recaptcha/production/recaptcha.js?b=1.70.0.474484"></script>
          <script src="https://www.google.com/recaptcha/api.js?onload=onloadInfusionRecaptchaCallback&render=explicit" async="async" defer="defer"></script> --}}
          <script type="text/javascript" src="https://jpo906.infusionsoft.com/app/timezone/timezoneInputJs?xid=f845c8cb9a25e68cfa55a191608f90ba"></script>
          <script type="text/javascript" src="https://jpo906.infusionsoft.app/app/webform/overwriteRefererJs"></script>
          <script type="text/javascript">document.addEventListener("DOMContentLoaded", function() {document.getElementById("spamkill_formurl").value = window.location.href; document.getElementById("inf_form_5284120bc3b80bbe6d08d16e7de865b9").addEventListener('submit', function (event) {event.stopPropagation();}, true);});</script>
        </div>
      </div>
    </div>
  </div>
</div>
