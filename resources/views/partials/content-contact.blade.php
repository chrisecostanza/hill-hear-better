@include('partials.page-header')

<div id="contact-page">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 col-left">
        <h2>Contact Our Audiologists</h2>
        <p class="contact-paragraph">For general inquiries please use our contact form.</p>

        @php $args = array(
          'posts_per_page' => -1,
          'post_type' => 'offices',
          'post_status' => 'publish',
          'orderby' => 'menu_order',
        );
        $office_locations = new WP_Query( $args );
        if ( $office_locations->have_posts() ) : @endphp
          @php while ( $office_locations->have_posts() ) : $office_locations->the_post() @endphp
            <div class="office-contact-details">
              <h3>{{ the_field('office_title') }}</h3>
              <p class="office-address">
                {{ the_field('office_address') }}<br />
                {{ the_field('office_city') }}, {{ the_field('office_state') }} {{ the_field('office_zipcode') }}<br />
                <b>Phone: <a href='tel:{{ the_field('office_phone') }}'>{{ the_field('office_phone') }}</a></b><br />
                {{-- <b>Text: <a href='tel:{{ the_field('office_phone') }}'>{{ the_field('office_text') }}</a></b> --}}
              </p>
              <a href={{ get_permalink() }} class="office-link">More office details</a>
            </div>
          @php endwhile @endphp
        @php else : @endphp
          <p>Ooops, no offices here!</p>
        @php endif @endphp
        @php wp_reset_postdata() @endphp
      </div>
      <div class="col-12 col-md-6 col-right">
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
          </form> --}}
          <form accept-charset="UTF-8" action="https://protect.spamkill.dev/v1/" class="infusion-form" id="inf_form_5284120bc3b80bbe6d08d16e7de865b9" method="POST"><input type="hidden" name="spamkill_formurl" id="spamkill_formurl" value="" /><input type="hidden" name="spamkill_version" id="spamkill_version" value="1.1" /><input type="hidden" name="spamkill_data2" id="spamkill_data2" value="" /><input type="hidden" name="spamkill_data1" id="spamkill_data1" value="" /><input type="hidden" name="formdata" id="formdata" value="8MJ1HCu7L5yQ8VB0F4bTcX702K82cwm7m+fFNcGCJpBb83lyO0MlEUP3sEki/0VlLl9C60QSzKEvoFaayxZTqPi4nyqEGLCwoDfWIYuZzU93n76Kg46WfCznW8KaBKFs5Io4StO6npKppD5Q6k8Yv8xcdqwDHnFeeJx3FDeykqBUaGL6bWGx03BNHGz27yOh8lCWqxFzUsZ5W+6lftPJsUcyQIWEpkaP0ES7p9kMEdA8taEC64O4FjPPTmEkpz4K0dVaOHpTNl90UeRzuymg6OnEOefSv4p1mmn/rFxggWK+mLgIjL8qW8FQo7gbKVNmr8ZXkoQMIDD8sT5wRSERiLePtHf/92UYzakaxspKO+PcJNVveUxeOj+ZIAH9YsAdlrB8xxD9ft1L0SWUhR+Kjq/i6tLynq6RO7u6VVqRIBnIwK7cGQb5Gbo9nzCBHBFGZ2gM0yocWthqrl6XPJZ4iaFLAgE07/RndjMd/RfXoUoOQcbYkOTMUm3eqGoSvuqvASzjkIk/U/E9mEdxcuP1dB9gFYc5rXeR81lgHly+jWwY20b2YT2HVaS/jF3pFatI9WlCDNLt240iV1mqYV2fCfL9FmxXV2FQEp/KQLX7TsebMvoiUXoaP0Qyo/EOfnXkmFQDvyG9MJ9HtFmnUSbIcpEjgI/zNRra4tht8RKe6gQSxsZXfvl4VS+Pwp9lAvqHXS6Q2A9YC4gllPiF3cdfuaDvgzAKRDRDoR2pdtwOZYCUq9tvHLwpEi6NqD+wS/s9W53SfEsR9+OMEnEccxfjnMVJFzoHgQhcRli9zc3ATgPgZFioP/YnuD61/SJpEUlhkO8Zio1qpQiUxnp4R/v7ProjNLGTKBF+Hsga8Rava7cm43njxyIAhycgfZuGoFEhk1bjSw6N4Nkk/fSYbXnxXxDXEph8pMV707Ry6DdZNRYsYeiaJ1ToAuGyWE75GKTaY0qms//Eb+3jWwpwip21U2LMxftUlxoptwS8lA2LxgTDWxFWPAPZFr+ILEa5NT0rxT/2K/0abBAcQQH7ncEf6X4XMd+ihtXjiSAE4UqGsGiaJ4RMI8IxT65xqLV0EP17BVuZiIB2EPvInlFq2k3x9yfS/3AKXDL/IcNthGjWAhjXG5KGYYMgdGNf7JxYWeTe271BHB7JlogBT3Evxil8F4+sePxpyGScmqmmGLNAqV8DJa+7kFCE2SvAb9+FJmqsbU1DePIV557r5aHeHeQmWQ==" /><input type="hidden" name="formid" id="formid" value="3fc348B2IZBHGk2JS3mGYcHl0z" /><input type="hidden" name="formname" id="formname" value="022eDQp8KQ4dgKQqzxit8kHQi4tGYTau38j3OaVeosCp78g" />                                                        <div class="infusion-field">                <label for="hHcgbKaQpAuhcJo2jzGbxtC8BehWZF9M3BMtNjX6uNZ">First Name *</label>                <input tabindex="264" id="sk_HvvfukCFZ8PAPt8qD7sjd" name="HvvfukCFZ8PAPt8qD7sjd" placeholder="Your Email Address Here..." type="text"  autocomplete="a352" style="position: absolute;top: -9999px;left: -9999px;"  /> <input id="sk_hHcgbKaQpAuhcJo2jzGbxtC8BehWZF9M3BMtNjX6uNZ" name="hHcgbKaQpAuhcJo2jzGbxtC8BehWZF9M3BMtNjX6uNZ" placeholder="" type="text" tabindex="31" /><input id="sk_inf_field_FirstName" name="inf_field_FirstName" placeholder="inf_field_FirstName *" type="text" tabindex="509" autocomplete="off" style="position: absolute;top: -9999px; left: -9999px;" class="-gypqi" value="" novalidate="novalidate" /><input tabindex="281" id="sk_3hNXXCy4uiTU2KYbq51Kpj" name="3hNXXCy4uiTU2KYbq51Kpj" placeholder="Email *" type="text"  autocomplete="a850" style="position: absolute;top: -9999px;left: -9999px;"  />               </div>              <div class="infusion-field">                <label for="dlG0tcREhbZKBvLaAQnQFX9nq4dxwGdF8tFcTRJq7I4">Last Name *</label>                <input id="sk_dlG0tcREhbZKBvLaAQnQFX9nq4dxwGdF8tFcTRJq7I4" name="dlG0tcREhbZKBvLaAQnQFX9nq4dxwGdF8tFcTRJq7I4" placeholder="" type="text" tabindex="32" /><input id="sk_inf_field_LastName" name="inf_field_LastName" placeholder="inf_field_LastName *" type="text" tabindex="464" autocomplete="off" style="position: absolute;top: -9999px; left: -9999px;" class="-jtzim" value="" novalidate="novalidate" /><input tabindex="247" id="sk_43g2wN9XCpeYWtmMBkyFEh" name="43g2wN9XCpeYWtmMBkyFEh" placeholder="Your Email Address Here..." type="text"  autocomplete="a246" style="position: absolute;top: -9999px;left: -9999px;"  />               </div>              <div class="infusion-field">                <label for="3PENe1ggaiUbmQT21EWBMh">Email *</label>                <input tabindex="292" id="sk_hzstDRyVyM6eZE5rFYT9E" name="hzstDRyVyM6eZE5rFYT9E" placeholder="Enter your email address" type="text"  autocomplete="a227" style="position: absolute;top: -9999px;left: -9999px;"  /> <input id="sk_3PENe1ggaiUbmQT21EWBMh" name="3PENe1ggaiUbmQT21EWBMh" placeholder="" type="text" tabindex="33" /><input id="sk_inf_field_Email" name="inf_field_Email" placeholder="inf_field_Email *" type="text" tabindex="546" autocomplete="off" style="position: absolute;top: -9999px; left: -9999px;" class="-vmifs" value="" novalidate="novalidate" />              </div>              <div class="infusion-field">                <label for="tebVGjlj7Hllm0GeJfjOwCBvG3rHlh180QDoF6l7FlO">Phone *</label>                <input id="sk_inf_field_Phone1" name="inf_field_Phone1" placeholder="inf_field_Phone1 *" type="text" tabindex="434" autocomplete="off" style="position: absolute;top: -9999px; left: -9999px;" class="-bpcgn" value="" novalidate="novalidate" /><input id="sk_tebVGjlj7Hllm0GeJfjOwCBvG3rHlh180QDoF6l7FlO" name="tebVGjlj7Hllm0GeJfjOwCBvG3rHlh180QDoF6l7FlO" placeholder="" type="text" tabindex="34" />              </div>              <div class="infusion-field form-textarea">                <label for="ybqzZzFXFb2Mp46ewsCVIkGEPZwUgtVGED3P7F2gcBr">How Can We Help You?</label>                <textarea cols="24" id="sk_ybqzZzFXFb2Mp46ewsCVIkGEPZwUgtVGED3P7F2gcBr" name="ybqzZzFXFb2Mp46ewsCVIkGEPZwUgtVGED3P7F2gcBr" placeholder="" rows="5" tabindex="35"></textarea><textarea cols="24" id="sk_inf_custom_Howcanwehelpyou" name="inf_custom_Howcanwehelpyou" placeholder="inf_custom_Howcanwehelpyou *" rows="5" tabindex="484" autocomplete="off" style="position: absolute;top: -9999px; left: -9999px;" class="-gzfqt" value="" novalidate="novalidate"></textarea>              </div>              <div class="infusion-submit">                <button class="infusion-recaptcha btn btn-white" type="submit" tabindex="36">Submit</button>              </div>            </form><script type="text/javascript">    document.addEventListener("DOMContentLoaded", function() {        document.getElementById("spamkill_formurl").value = window.location.href;               document.getElementById("inf_form_5284120bc3b80bbe6d08d16e7de865b9").addEventListener('submit', function (event) {            event.stopPropagation();        }, true);            });</script><script src="https://protect.spamkill.dev/v1/js/sodium-plus.min.js" type="text/javascript"></script><script src="https://protect.spamkill.dev/v1/jscript.php" type="text/javascript"></script>
          <script type="text/javascript" src="https://protect.spamkill.dev/v1/emailverify.js"></script>
          <script>var emailfield = '58MWnp0Dtlok5ikMFnnurP5uhMK2ZxsqrW';</script>

          <style type="text/css">
            #spamkill_suggestion {
              margin-bottom: 0 !important;
            }
          </style>

          <script type="text/javascript" src="https://jpo906.infusionsoft.app/app/webTracking/getTrackingCode"></script>
          {{-- <script type="text/javascript" src="https://jpo906.infusionsoft.com/resources/external/recaptcha/production/recaptcha.js?b=1.70.0.474484"></script> --}}
          {{-- <script src="https://www.google.com/recaptcha/api.js?onload=onloadInfusionRecaptchaCallback&render=explicit" async="async" defer="defer"></script> --}}
          <script type="text/javascript" src="https://jpo906.infusionsoft.com/app/timezone/timezoneInputJs?xid=f845c8cb9a25e68cfa55a191608f90ba"></script>
          <script type="text/javascript" src="https://jpo906.infusionsoft.app/app/webform/overwriteRefererJs"></script>
        </div>
      </div>
    </div>
  </div>
</div>
