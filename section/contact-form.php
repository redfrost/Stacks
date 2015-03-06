<div id="contact-form" class="ltr">
<hr>

  <form id="form1" name="form1" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
  action="<?php echo WUFOO_LINK; ?>">

      <ul>
            <h3>Contact Us</h3>
          <li id="foli5" class="notranslate">
          <label class="desc" id="title5" for="Field5">Name<span id="req_5" class="req">*</span></label>
          <span><input id="Field5" name="Field5" type="text" class="field text fn" placeholder="First Name" size="8" tabindex="1" required /></span>
          <span><input id="Field6" name="Field6" type="text" class="field text ln" placeholder="Last Name" size="14" tabindex="2" required /></span>
          </li>

          <li id="foli7" class="notranslate"><label class="desc" id="title7" for="Field7">Email
          <span id="req_7" class="req">*</span></label>
            <div><input id="Field7" name="Field7" type="email" spellcheck="false" class="field text medium" placeholder="johndoe@gmail.com" value="" maxlength="255" tabindex="3" required /></div></li>

          <li id="foli4" class="notranslate"><label class="desc" id="title4" for="Field4">Subject</label><div><input id="Field4" name="Field4" type="text" class="field text medium" value="" maxlength="255" tabindex="4" onkeyup="" /></div></li>

          <li id="foli8" class="notranslate"><label class="desc" id="title8" for="Field8">Message</label><div><textarea id="Field8" name="Field8" class="field textarea medium" spellcheck="true" rows="10" cols="50" tabindex="5" onkeyup="" ></textarea></div></li>

          <input id="saveForm" name="saveForm" class="btn btn-large btn-info btTxt submit" type="submit" value="Submit »" />

          <li class="hide">
          <label for="comment">Do Not Fill This Out</label>
          <textarea name="comment" id="comment" rows="1" cols="1"></textarea>
          <input type="hidden" id="idstamp" name="idstamp" value="<?php echo WUFOO_STAMP; ?>" />
          </li>
      </ul>
  </form>

</div><!-- /#contact-form -->

