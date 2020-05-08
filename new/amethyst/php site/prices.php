<?php
  define('IAMACAT', TRUE);
	# Script 4 - prices.php
	# Created 20 August 2018
	# Created by Katherine Wharton
	# Content for Prices page

	$page_title = 'My Prices | Amethyst Beauty by Sophy';
	include('includes/header.php');
?>

<h3>Price List</h3>
<p class="milage">Areas outside of Lichfield will incur a milage fee. Please ask for more information when booking.</p>
<div class="tab-list">
  <a class="tab-control active" id="tab1" aria-expanded="true">Threading</a>
  <a class="tab-control" id="tab2" aria-expanded="false">Waxing</a>
  <a class="tab-control" id="tab3" aria-expanded="false">Relaxing Treatments</a>
  <a class="tab-control" id="tab4" aria-expanded="false">Spray Tanning</a>
</div>
<div class="tab-list">
  <a class="tab-control" id="tab5" aria-expanded="false">Tinting</a>
  <a class="tab-control" id="tab6" aria-expanded="false">Hands &amp; Feet</a>
  <a class="tab-control" id="tab7" aria-expanded="false">Calgel Nails</a>
  <a class="tab-control" id="tab8" aria-expanded="false">Parties</a>
</div>
<div class="tab-panel active" id="tab-1">
  <table>
    <tr>
      <td>Eyebrows</td>
      <td>&pound;5.00</td>
    </tr>
    <tr>
      <td>Lip</td>
      <td>&pound;4.50</td>
    </tr>
    <tr>
      <td>Lip &amp; Chin</td>
      <td>&pound;6.50</td>
    </tr>
    <tr>
      <td>Facial Threading</td>
      <td>From &pound;6.00</td>
    </tr>
  </table>
</div>
<div class="tab-panel" id="tab-2">
  <table>
    <tr>
      <td>1/2 Leg</td>
      <td>&pound;10.50</td>
    </tr>
    <tr>
      <td>3/4 Leg</td>
      <td>&pound;15.00</td>
    </tr>
    <tr>
      <td>Full Leg</td>
      <td>&pound;18.50</td>
    </tr>
    <tr>
      <td>Underarm</td>
      <td>&pound;7.00</td>
    </tr>
    <tr>
      <td>Arm</td>
      <td>&pound;7.00</td>
    </tr>
    <tr>
      <td>Eyebrow</td>
      <td>&pound;6.00</td>
    </tr>
    <tr>
      <td>Lip</td>
      <td>&pound;5.00</td>
    </tr>
    <tr>
      <td>Lip &amp; Chin</td>
      <td>&pound;7.50</td>
    </tr>
  </table>
</div>
<div class="tab-panel" id="tab-3">
  <table>
    <tr>
      <td>Facial (30 minutes)</td>
      <td>&pound;14.00</td>
    </tr>
    <tr>
      <td>Deluxe Facial (45 minutes including massage)</td>
      <td>&pound;17.50</td>
    </tr>
    <tr>
      <td>Back and Shoulder Massage with Hot Stones</td>
      <td>&pound;20.00</td>
    </tr>
  </table>
</div>
<div class="tab-panel" id="tab-4">
  <table>
    <tr>
      <td>Sienna X</td>
      <td>&pound;20.00</td>
    </tr>
  </table>
</div>
<div class="tab-panel" id="tab-5">
  <table>
    <tr>
      <td>Eyelash</td>
      <td>&pound;8.50</td>
    </tr>
    <tr>
      <td>Eyebrow</td>
      <td>&pound;4.50</td>
    </tr>
    <tr>
      <td>Eye Package<br />(All tints and a choice of eyebrow wax or thread)</td>
      <td>&pound;14.50</td>
    </tr>
  </table>
</div>
<div class="tab-panel" id="tab-6">
  <table>
    <tr>
      <td>File &amp; Polish Hands</td>
      <td>&pound;8.50</td>
    </tr>
    <tr>
      <td>File &amp; Polish Feet</td>
      <td>&pound;6.50</td>
    </tr>
    <tr>
      <td>Manicure</td>
      <td>&pound;12.00</td>
    </tr>
    <tr>
      <td>Manicure with nail polish</td>
      <td>&pound;14.50</td>
    </tr>
    <tr>
      <td>Deluxe Manicure<br /><div class="desc">Luxury paraffin wax treatment. Great for those with dry hands, arthritis, eczema or inflammation.<br />Includes nail polish.</div></td>
      <td>&pound;18.00</td>
    </tr>
    <tr>
      <td>Pedicure</td>
      <td>&pound;14.00</td>
    </tr>
    <tr>
      <td>Pedicure with nail polish</td>
      <td>&pound;16.50</td>
    </tr>
    <tr>
      <td>Deluxe Pedicure<br /><div class="desc">Luxury paraffin wax treatment intended to moisturise and soften the skin.<br />Includes nail polish.</div></td>
      <td>&pound;19.00</td>
    </tr>
  </table>
</div>
<div class="tab-panel" id="tab-7">
  <table>
    <tr>
      <td colspan="2">
        <h4 class="calgelhd">
          Why Calgel?
        </h4>
        <p class="calgel">
          Calgel allows air and moisture to pass through to the nails, so they don't become dehydrated, flakey or brittle over time.<br />For this reason, no 'break' is needed between treatments and the gel can be infilled up to 3 tmes before requiring a soak off.<br />After fully and safely soaking off, fresh gel can be applied without the worry of ruining the natural nail.
        </p>
      </td>
    </tr>
    <tr>
      <td>Full set of extensions</td>
      <td>&pound;30.00</td>
    </tr>
    <tr>
      <td>Overlay</td>
      <td>&pound;23.00</td>
    </tr>
    <tr>
      <td>Overlay Toes</td>
      <td>&pound;17.00</td>
    </tr>
    <tr>
      <td>Neon Powders</td>
      <td>&pound;2.00 (per nail)</td>
    </tr>
    <tr>
      <td>Rhinestones</td>
      <td>50p (per nail)</td>
    </tr>
    <tr>
      <td>Glitter</td>
      <td>&pound;1.50</td>
    </tr>
    <tr>
      <td>2 week infill</td>
      <td>&pound;21.00</td>
    </tr>
    <tr>
      <td>3 week infill</td>
      <td>&pound;24.50</td>
    </tr>
    <tr>
      <td>4 week infill</td>
      <td>&pound;25.50</td>
    </tr>
    <tr>
      <td>Soak Off</td>
      <td>&pound;10.00</td>
    </tr>
    <tr>
      <td>Soak Off and Re Gel</td>
      <td>&pound;26.00</td>
    </tr>
  </table>
</div>
<div class="tab-panel" id="tab-8">
  <p class="party">
    Pamper parties, children's parties, prom packages and wedding packages are also available. Please contact me for information about these. Prices depend on party size and treatments chosen.
  </p>
</div>

<?php
	include('includes/footer.php');
?>
