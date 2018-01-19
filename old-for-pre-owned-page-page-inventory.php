<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Atlantic Cruising Yachts
 */



get_header(); ?>
	<style type="text/css">
		div.boatCard {
			position: relative;
			height: 550px;
		}
			div.boatCard h1 {
				font-size: 30px;	
				margin-bottom: 14px;
			}
			div.boatCardReadMore {
				position: absolute;
				box-sizing: border-box;
				bottom: 15px;
				width: 100%;
				border-left: 15px solid rgb(255,255,255);
				border-right: 15px solid rgb(255,255,255);
			}
			
		div.printAllImages {
			display: none;	
		}
			
		@media print {
			header#masthead {
				display: none !important;	
			}
			div.feature-wrapper {
				display: none !important;
			}	
			header.entry-header > article.page {
				display: none !important;
			}
			div#boatControlsContainer {
				display: none !important;
			}
			div#goBackResults {
				display: none !important;
			}
			div#boatResults h2 {
				display: none !important;
			}
			div#resultCount {
				display: none !important;
			}
			div#singleMainBoatImg {
				display: none !important;	
			}
			div.singleBoatCarouselWrap {
				display: none !important;	
			}
			div.video-container {
				display: none !important;	
			}
			div.singleBoatResult hr:last-of-type {
				display: none !important;	
			}
			div.singleBoatResult h3:last-of-type {
				display: none !important;	
			}
			div.singleBoatResult ul.form-contact-info {
				display: none !important;	
			}
			div.singleBoatResult p:last-of-type {
				display: none !important;	
			}
			div#singleBoatContact hr,
			div#singleBoatContact form div ,
			div#singleBoatContact form input {
				display: none !important;
			}
			div#singleBoatContact h2 {
				display: block !important;	
			}
			footer.site-footer {
				display: none !important;	
			}
			div.printAllImages {
				display: block !important;
				margin-top: 25px;
				margin-bottom: 25px;
			}		
			img.printAllImagesThumbnail {
				max-width: 200px;
				max-height: 150px;
				margin: 0 14px 10px 0;	
			}	
			p#printThisPage {
				display: none !important;	
			}			
		}
	</style>
	<div id="content-wrapper">
		<div id="boatInventoryPrimary" class="content-area">
			<main id="main" class="site-main" role="main">
				<header class="entry-header">
				<?php while ( have_posts() ) : the_post(); ?>
				
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
				
					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>
				
				<?php endwhile; // End of the loop. ?>
			<div id="boatControlsContainer" class="cf">
				<div class="boatControlsColumn">
					<form id="boatFilterControls" class="cf">
						<h2> Search Boats For Sale</h2>
						<div class="boatFacetSection">
							<label for="boatClass">Boat Class
								<select name="Class" class="boatFacet" id="boatClass">
								    <option value="" selected="selected">All Boat Classes</option>
								    <option value="Catamaran">Catamaran</option>
								    <option value="Center Cockpit">Center Cockpit</option>
								    <option value="Deck Saloon">Deck Saloon</option>
								    <option value="Motor Yachts">Motor Yachts</option>
								    <option value="Multi-Hulls">Multi-Hulls</option>
								    <option value="Racers and Cruisers">Racers and Cruisers</option>
								    <option value="Sloop">Sloop</option>
								</select>

							</label>
						</div>
						<div class="boatFacetSection">
							<label for="boatManufacturer">Manufacturers
								<select name="Make" class="boatFacet" id="boatManufacturer">
								    <option value="" selected="selected">All Manufacturers</option>
<!-- 								    <option value="Albin 32">Albin 32</option>
								    <option value="Bavaria">Bavaria</option>
								    <option value="Bayfield">Bayfield</option>
								    <option value="Beneteau">Beneteau</option>
								    <option value="Beneteau First">Beneteau First</option>
								    <option value="Beneteau Gran Turismo ">Beneteau Gran Turismo </option>
								    <option value="Beneteau Oceanis">Beneteau Oceanis</option>
								    <option value="Beneteau Sense">Beneteau Sense</option>
								    <option value="Beneteau Swift Trawler">Beneteau Swift Trawler</option>
								    <option value="Beneteau Swift Trawler 34">Beneteau Swift Trawler 34</option>
								    <option value="Beneteau USA">Beneteau USA</option>
								    <option value="Bertram">Bertram</option>
								    <option value="Bristol">Bristol</option>
								    <option value="Bruce Roberts">Bruce Roberts</option>
								    <option value="Budsin">Budsin</option>
								    <option value="C&amp;C">C&amp;C</option>
								    <option value="CAL">CAL</option>
								    <option value="Campion Allante LX 925i">Campion Allante LX 925i</option>
								    <option value="Canadian Sailcraft">Canadian Sailcraft</option>
								    <option value="Cape Dory">Cape Dory</option>
								    <option value="Carver">Carver</option>
								    <option value="Catalina">Catalina</option>
								    <option value="Celestial">Celestial</option>
								    <option value="Chaparral">Chaparral</option>
								    <option value="Cheoy Lee">Cheoy Lee</option>
								    <option value="Chris-Craft">Chris-Craft</option>
								    <option value="Cobalt">Cobalt</option>
								    <option value="Colgate">Colgate</option>
								    <option value="CS">CS</option>
								    <option value="CT">CT</option>
								    <option value="Custom Fast Ketch Dashew Style">Custom Fast Ketch Dashew Style</option>
								    <option value="Dave Sintes">Dave Sintes</option>
								    <option value="Dean">Dean</option>
								    <option value="Eastport">Eastport</option>
								    <option value="Edgewater">Edgewater</option>
								    <option value="Egg Harbor">Egg Harbor</option>
								    <option value="Four Winns">Four Winns</option>
								    <option value="Fox Island">Fox Island</option>
								    <option value="Freedom Yachts">Freedom Yachts</option>
								    <option value="Frers">Frers</option>
								    <option value="Friendship">Friendship</option>
								    <option value="Gemini">Gemini</option>
								    <option value="Grady-White">Grady-White</option>
								    <option value="Grand Soleil">Grand Soleil</option>
								    <option value="Greenline">Greenline</option>
								    <option value="Greenline Hybrid">Greenline Hybrid</option>
								    <option value="Hallberg Rassy">Hallberg Rassy</option>
								    <option value="Hallberg-Rassy">Hallberg-Rassy</option>
								    <option value="Harbor">Harbor</option>
								    <option value="Hardin">Hardin</option>
								    <option value="Hatteras">Hatteras</option>
								    <option value="Hunter">Hunter</option>
								    <option value="Hurricane">Hurricane</option>
								    <option value="Intrepid">Intrepid</option>
								    <option value="Island Packet">Island Packet</option>
								    <option value="J Boats">J Boats</option>
								    <option value="J Boats J/40">J Boats J/40</option>
								    <option value="Jeanneau">Jeanneau</option>
								    <option value="Lagoon">Lagoon</option>
								    <option value="Lancer Yachts">Lancer Yachts</option>
								    <option value="Macgregor">Macgregor</option>
								    <option value="Mainship">Mainship</option>
								    <option value="Marlow Explorer">Marlow Explorer</option>
								    <option value="Meridian">Meridian</option>
								    <option value="Monte Carlo">Monte Carlo</option>
								    <option value="Moody">Moody</option>
								    <option value="Morgan">Morgan</option>
								    <option value="Nauticat">Nauticat</option>
								    <option value="Nonsuch">Nonsuch</option>
								    <option value="North American">North American</option>
								    <option value="O'Day">O'Day</option>
								    <option value="Passport">Passport</option>
								    <option value="Pearson">Pearson</option>
								    <option value="Phoenix">Phoenix</option>
								    <option value="Prairie Boat Works">Prairie Boat Works</option>
								    <option value="President">President</option>
								    <option value="Regal">Regal</option>
								    <option value="Richard Faulkner">Richard Faulkner</option>
								    <option value="Sabre">Sabre</option>
								    <option value="Schock">Schock</option>
								    <option value="Schucker">Schucker</option>
								    <option value="Scout">Scout</option>
								    <option value="Silverton">Silverton</option>
								    <option value="Stamas">Stamas</option>
								    <option value="Steiger">Steiger</option>
								    <option value="STEIGER CRAFT">STEIGER CRAFT</option>
								    <option value="Tartan">Tartan</option>
								    <option value="Tayana">Tayana</option>
								    <option value="Tiara">Tiara</option>
								    <option value="Trophy">Trophy</option>
								    <option value="VANQUISH">VANQUISH</option>
								    <option value="Viking Yachts">Viking Yachts</option>
								    <option value="Wauquiez">Wauquiez</option> -->
								    <option value="Admiral">Admiral</option>
								    <option value="Antares">Antares </option>								    
								    <option value="BALI">BALI</option>
								    <option value="Bavaria Yachts">Bavaria Yachts</option>
								    <option value="Bavaria">Bavaria</option>
								    <option value="Beneteau">Beneteau</option>
								    <option value="Beneteau Oceanis">Beneteau Oceanis</option>
								    <option value="Beneteau First">Beneteau First</option>
								    <option value="Beneteau Sense">Beneteau Sense </option>
								    <option value="Beneteau USA">Beneteau USA </option>
								    <option value="Catalina">Catalina </option>
								    <option value="Catana">Catana </option>
								    <option value="Dufour">Dufour </option>
								    <option value="Dufour Grand Large">Dufour Grand Large </option>
								    <option value="Elan">Elan </option>
								    <option value="Elan Impression">Elan Impression </option>
								    <option value="Fountaine Pajot">Fountaine Pajot </option>
								    <option value="Gemini Catamarans">Gemini Catamarans </option>
								    <option value="Gemini Catamarans Legacy">Gemini Catamarans Legacy </option>
								    <option value="Gunboat">Gunboat </option>
								    <option value="Hanse">Hanse </option>
								    <option value="Hanse US">Hanse US </option>
								    <option value="Hunter">Hunter </option>
								    <option value="Hunter Deck Salon">Hunter Deck Salon </option>
								    <option value="Hylas">Hylas </option>
								    <option value="Island Packet">Island Packet </option>
								    <option value="Island Packet Estero">Island Packet Estero </option>
								    <option value="Jeanneau">Jeanneau </option>
								    <option value="Jeanneau Sun Odyssey">Jeanneau Sun Odyssey </option>
								    <option value="Jeanneau Deck Salon">Jeanneau Deck Salon </option>
								    <option value="Jeanneau Sloop">Jeanneau Sloop </option>
								    <option value="Lagoon">Lagoon </option>
								    <option value="Leopard">Leopard </option>
								    <option value="Maltese Catamarans">Maltese Catamarans </option>
								    <option value="Marlow Hunter">Marlow Hunter </option>
								    <option value="Nautitech">Nautitech </option>
								    <option value="Outbound">Outbound </option>
								    <option value="Outremer">Outremer </option>
								    <option value="OutremerSerene">OutremerSerene </option>
								    <option value="Privilege">Privilege </option>
								    <option value="Robertson&Cain">Robertson & Caine</option>									    
								    <option value="Robertson and Caine Leopard">Robertson and Caine Leopard</option>								    							    
								    <option value="Tartan">Tartan </option>
								    <option value="Voyage">Voyage</option>
								    <option value="X-Yachts">X-Yachts </option>
								</select>
							</label>
						</div>

						<div class="boatFacetSection">
							<label for="boatType">Type
								<select name="category" class="boatFacet" id="boatType">	            
								    <option value="" selected="selected">All Boat Types</option>					
								    <option value="Power">Power</option>
								    <option value="Sail">Sail</option>    
							    </select>
							</label>
						</div>

						<?if (1==2) {?>
						<div class="boatFacetSection">
							<label for="boatHullMaterial">Hull Material
								<select name="Hull" class="boatFacet" id="boatHullMaterial">
								    <option value="">All Hull Material</option>
								    <option value="Aluminum">Aluminum</option>
								    <option value="Carbon Fiber">Carbon Fiber</option>
								    <option value="Composite">Composite</option>
								    <option value="Ferro-Cement">Ferro-Cement</option>
								    <option value="Fiberglass">Fiberglass</option>
								    <option value="Hypalon">Hypalon</option>
								    <option value="PVC">PVC</option>
								    <option value="Steel">Steel</option>
								    <option value="Wood">Wood</option>
								</select>
							</label>
						</div>
						<?}?>

						<?if (1==2) {?>
						<div class="boatFacetSection">
							<label for="boatFuelType">Fuel Type
								<select name="Fuel" class="boatFacet" id="boatFuelType">
								    <option value="">All Fuel Types</option>
								    <option value="diesel">Diesel</option>
								    <option value="unleaded">Gas</option>
								    <option value="other">Other</option>
								</select>
							</label>
						</div>
						<?}?>

						<div class="boatFacetSection">
							<label for="boatCost">Price
								<input name="Price" class="boatFacet-range" type="text" id="boatCost" readonly style="border:0; color:#f6931f; font-weight:bold;background: none;">
							</label>
							<p class="slider-instructions">Use the slider controls below to set a minimum and maximum price.</p>
							<div id="slider-range-price"></div>
							
						</div>
						<div class="boatFacetSection">
							<label for="boatProductionYear">Production Year
								<input name="Year" class="boatFacet-range" type="text" id="boatProductionYear" readonly style="border:0; color:#f6931f; font-weight:bold;background: none;">
							</label>
							<p class="slider-instructions">Use the slider controls below to set a minimum and maximum production year.</p>
							<div id="slider-range-year"></div>
							
						</div>
						<div class="boatFacetSection">
							<label for="boatLength">Boat Length (feet)
								<input name="Length" class="boatFacet-range" type="text" id="boatLength" readonly style="border:0; color:#f6931f; font-weight:bold;background: none;"> 
							</label>
							<p class="slider-instructions">Use the slider controls below to set a minimum and maximum boat length.</p>
							<div id="slider-range-length"></div>
							
						</div>
						<div class="boatFacetSection">
							<label for="metaKeyword">Keyword Search
								<input name="AdvancedKeywordSearch" class="boatFacet" id="metaKeyword" type="text">
							</label>
						</div>

						<div class="facetSubmit">
							<div class="boatFacetSection">
								<label for="rows">Results Per Page
									<select name="rows" class="facetRows" id="rows">
										<option value="25">25</option>
										<option value="50">50</option>
										<option value="75">75</option>
										<option value="100">100</option>
									</select>
								</label>
							</div>

							<div class="boatFacetSection">
								<input type="submit" class="seachButton" name="searchButton" id="searchButton" value="Search">
							</div>
						</div>
					</form>
				</div>
				<div id="controlsInquirySection" class="boatControlsColumn">
					<form id="boatInquiryFormMain" method="post">
						<h2>Have A Question?</h2>
						<div class="formRow">
							<label for="singleBoatNameMain">Name:</label><input type="text" value="" name="sb-name" id="singleBoatNameMain">
						</div>
						<div class="formRow">
							<label for="singleBoatEmailMain">Email:</label><input type="text" value="" name="sb-email" id="singleBoatEmailMain">
						</div>
						<div class="formRow">
							<label for="singleBoatPhoneMain">Phone:</label><input type="text" value="" name="sb-phone" id="singleBoatPhoneMain">
						</div>
						<div class="formRow">
							<label for="singleBoatSubjectMain">Subject:</label><input type="text" value="" name="sb-subject" id="singleBoatSubjectMain">
						</div>
						<div class="formRow">
							<label for="singleBoatEnquiryMain">Questions/Comments:</label><textarea value="" name="sb-enquiry" id="singleBoatEnquiryMain"></textarea>
						</div>
						<input id="sbMain-submit" type="submit" name="sb-submitted" value="Submit">
						<ul class="form-contact-info">
							<li><strong>ACY Sales:</strong></li>
							<li>+1 443-203-5596</li>
							<li>312 Third Street, Suite 102</li>
							<li>Annapolis, Maryland USA 21403</li>
						</ul>
					</form>
				</div>
			</div>
				<div id="boatContent" class="cf">
					<div id="boatResults" class="cf"></div>
				</div>
			</main><!-- #main -->
		</div><!-- #primary -->
		<?php //get_sidebar(); ?>
	</div><!-- #content-wrapper -->
<?php get_footer(); ?>
