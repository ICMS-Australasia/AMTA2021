</div>
<div class="col-md-3 sidebar py-5">
  <h2>Key Dates</h2>
  <ul class="dates">
    <li><strong>Call for Presentations</strong> <a href="call-for-presentations">Now Open</a></li>
    <li><strong>Call for Presentations close (extended)</strong> 24 August 2020</li>
    <li><strong>Notification to authors</strong> 7 September 2020</li>
    <li><strong>Registration opens</strong> September 2020</li>
    <li class="event"><strong>AMTA 2020 Conference</strong> 7 - 15 November 2020</li>
  </ul>
  <?php if ($title != "Conference Sponsorship Opportunities") { ?>
      <h2 class='mt-5'>AMTA 2020 Sponsors</h2>
      <img src="./img/sponsors/sound-expression.png" class="img-fluid p-4">
      <img src="./img/sponsors/mto.png" class="img-fluid p-4">
  <?php } ?>
</div>
</div>
</div>
</div>
<!-- -->
<!-- footer -->
<div class="footer">
<div class="container">
<div class="row pt-5">
<div class="col-md-6 pb-3 pb-md-5 footer-menu">

  <h3>Navigation</h3>

  <div class="row">
    <div class="col-md-6">
      <ol class="submenu">
        <li>
          Home
          <ul>
            <li><a href="./">Welcome</a></li>
            <li><a href="committee">Committee</a></li>
          </ul>
        </li>
        <li><a href="call-for-presentations">Call for Presentations</a></li>
        <!--li>
          Program
          <ul>
            <li><a href="program-schedule">Program/Schedule</a></li>
            <li><a href="keynote-speakers">Keynote Speakers</a></li>
            <li><a href="social-program">Social Program</a></li>
          </ul>
        </li-->
      </ol>
    </div>
    <div class="col-md-6">
      <ol class="submenu">
        <li>
          Registration
          <ul>
            <li><a href="event-registration">Event Registration</a></li>
            <!--li><a href="accommodation">Accommodation</a></li>
            <li><a href="privacy-policy">Privacy Policy</a></li-->
          </ul>
        </li>
        <!--li>
          Sponsorship & Exhibition
          <ul>
            <li><a href="sponsorship-and-exhibition-opportunities">Sponsorship & Exhibition Opportunities</a></li>
            <li><a href="confirmed-sponsors">Confirmed Sponsors</a></li>
          </ul>
        </li-->

      </ol>
    </div>
  </div>

</div>
<div class="col-md pb-5 pb-md-5 footer-contact">

  <h3>Contact Us</h3>

  <p>For all enquiries, please contact the AMTA2020 Conference Secretariat.</p>

  <div class="row">
    <div class="col-6">
      <p><strong>General Enquiries</strong><br>
        AMTA2020 Conference Secretariat<br>
        GPO Box 3270<br>
        Sydney NSW 2001<br>
        +61 (0) 2 9254 5000<br>
        <a href="mailto:info@austmtaconference.com.au">info@austmtaconference.com.au</a>
      </p>
    </div>
    <div class="col-6 text-right">
      <a href="http://www.icmsaust.com.au/" target="_blank"><img src="img/icms.png" width="200" class="img-fluid mt-2"></a>
    </div>
  </div>
  <div class="row">
    <div class="col-md">
      <p><a href="contact-us">View full Contact Information</a></p>
    </div>
  </div>
</div>
</div>
</div>
</div>

<!-- JavaScript -->
<script src="https://kit.fontawesome.com/abad5402ea.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript">
const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";

$(window).on("load resize", function() {
if (this.matchMedia("(min-width: 768px)").matches) {
$dropdown.hover(
  function() {
    const $this = $(this);
    $this.addClass(showClass);
    $this.find($dropdownToggle).attr("aria-expanded", "true");
    $this.find($dropdownMenu).addClass(showClass);
  },
  function() {
    const $this = $(this);
    $this.removeClass(showClass);
    $this.find($dropdownToggle).attr("aria-expanded", "false");
    $this.find($dropdownMenu).removeClass(showClass);
  }
);
} else {
$dropdown.off("mouseenter mouseleave");
}
});
</script>
</body>

</html>
