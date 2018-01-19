(function( $ , _ ) {

    var currentYear = new Date().getFullYear();

    $(document).ready(function(){

        "use strict";

        //boolean to prevent init from scrolling
        var scrolled;

        //Used for string concatecation of fieldsList values
        var fields;

        //Fields list are the fields which are responded from by the API
        var fieldsList = new Array();

        //Facets are the filters used to query the API
        var facetsList = '';

        var resultsRows = '';
        

        //Dom caching
        var $searchBtn = $('#searchButton');
        var $searchForm = $('#boatFilterControls');
        var $boatResults = $("#boatResults");
        var $boatFacets = $('.boatFacet');
        var $boatFacetRange = $('.boatFacet-range');
        var $boatGridresult = $('.boatGridResult');
        var $backBoatHTML = '';


        //Setup Requied Fields, should probably push all to array as arguments list
        fieldsList.push('DocumentID');
        fieldsList.push('BoatName');
        fieldsList.push('LengthOverall');
        fieldsList.push('Price');
        fieldsList.push('BoatLocation');
        fieldsList.push('Images');
        fieldsList.push('EmbeddedVideo');
        fieldsList.push('MakeString');
        fieldsList.push('ModelYear');
        fieldsList.push('Model');

        //Concat the fields so that they are a string (DocumentID,Images,AdditionalDescription) etc
        fields = fieldsList.join(",");

        $searchForm.on('submit', function(e) {
            e.preventDefault();
            e.stopPropagation();

            facetsList = '';

            $boatFacets.each(function(){
                if( $(this).val() != ''){
                    if( $(this).attr('name')==='Make' || 
                        $(this).attr('name')==='Class' ||
                        $(this).attr('name')==='Fuel' ||
                        $(this).attr('name')==='Hull'
                        ){
                        facetsList +=  '&'+ $(this).attr('name') + '=' + $(this).val().replace(/ /g, "+");
                    }else{
                        facetsList +=  '&'+ $(this).attr('name') + '=' + $(this).val();
                    }
                }
            });

           

            $boatFacetRange.each(function(){
                var formatedRange =  $(this).val().replace(" - ", ":").replace(/\$/g, "");

                if($(this).attr('name')==='Length'){
                    formatedRange += '|feet';
                }

                facetsList += '&'+ $(this).attr('name') + '=' + formatedRange;
            });

            

            getBoatsData();
        });

        $boatResults.on('click', '.boatGridResult', function(){
            getBoatData(this.id);
        });    

        $boatResults.on('click', '#goBackResults', function(){
            //console.log($backBoatHTML);
            $boatResults.html($backBoatHTML);
        });      


        //Paginate the results
        $boatResults.on('click', '.pagerItem a', function(){
           
           getBoatsData( $(this).data( "pageid" )  );

           return false;
        });

        $boatResults.on('click', '.singleBoatThumbnail', function(){
           var bg = this.style.backgroundImage;

           document.getElementById("singleMainBoatImg").style.backgroundImage = bg;

           return false;
        });

        //Submit the form and then update the content
        $boatResults.on('click', '#sb-submit', function(){
            $.ajax({
                type: "POST",
                url: '/wp-content/themes/atlantic-cruising-yachts/inventory-mailer.php',
                data: $("#boatInquiryForm").serialize(), // serializes the form's elements.
                success: function(data)
                {
                    $("#singleBoatContact").html('<h2>Your Request Has been Sent!</h2><hr><p>We will contact you shortly.</p>')
                }
            });
           return false;
        });

        $('#sbMain-submit').on('click',function(){
           $.ajax({
              type: "POST",
              url: '/wp-content/themes/atlantic-cruising-yachts/inventory-mailer.php',
              data: $("#boatInquiryFormMain").serialize(),
              success: function(data)
              {
                  $("#controlsInquirySection").html('<h2>Your Request Has been Sent!</h2><hr><p>We will contact you shortly.</p>')
              }
          });
         return false;
        });


        $boatResults.on('click', '#scrollToBoatInquiry', function(){
            $('html, body').animate({
                scrollTop: $("#boatInquiryForm").offset().top -100
            }, 2000);

            $("#singleBoatName").focus(); 
            return false;
        });

        function scrollToResults(){
            $('html, body').animate({
               scrollTop:  $boatResults.offset().top
            }, 2000);
        }

        //Load all the Boats
        function getBoatsData(offset){
 
            var resultOffset;
            resultsRows = $('.facetRows').val();

            if(offset && offset != 1){
               resultOffset = (offset - 1) * resultsRows;
            }else{
                resultOffset = '';
            }
            
            //console.log(resultsRows);

			//var url_notEncoded = 'https://services.boats.com/pls/boats/search?key=d41d8cd98f00&fields='+fields+facetsList+'&rows='+resultsRows+'&offset='+resultOffset+'&MakeString=Robertson%20and%20Caine%20Leopard,BALI,Bavaria%20Yachts,Bavaria,Beneteau,Beneteau%20Oceanis,%20Beneteau%20First,Beneteau%20Sense,Beneteau%20USA,Catalina,Dufour,Dufour%20Grand%20Large,%20Elan,Elan%20Impression,Fountaine%20Pajot,Gemini%20Catamarans,Gemini%20Catamarans%20Legacy,Gunboat,Hanse,Hanse%20US,Hunter,Hunter%20Deck%20Salon,Hylas,Island%20Packet,Island%20Packet%20Estero,Jeanneau,Jeanneau%20Sun%20Odyssey,Jeanneau%20Deck%20Salon,Jeanneau%20Sloop,Lagoon,Leopard,Maltese%20Catamarans,Marlow%20Hunter,Nautitech,Outbound,OutremerSerene,Tartan,X-Yachts,Antares,Robertson&Caine';
			//alert(url_notEncoded);
			
            //var url = encodeURIComponent('https://services.boats.com/pls/boats/search?key=d41d8cd98f00&fields='+fields+facetsList+'&rows='+resultsRows+'&offset='+resultOffset+'&MakeString=Robertson%20and%20Caine%20Leopard,BALI,Bavaria%20Yachts,Bavaria,Beneteau,Beneteau%20Oceanis,%20Beneteau%20First,Beneteau%20Sense,Beneteau%20USA,Catalina,Dufour,Dufour%20Grand%20Large,%20Elan,Elan%20Impression,Fountaine%20Pajot,Gemini%20Catamarans,Gemini%20Catamarans%20Legacy,Gunboat,Hanse,Hanse%20US,Hunter,Hunter%20Deck%20Salon,Hylas,Island%20Packet,Island%20Packet%20Estero,Jeanneau,Jeanneau%20Sun%20Odyssey,Jeanneau%20Deck%20Salon,Jeanneau%20Sloop,Lagoon,Leopard,Maltese%20Catamarans,Marlow%20Hunter,Nautitech,Outbound,OutremerSerene,Tartan,X-Yachts,Antares,Robertson&Caine');
            var url = encodeURIComponent('https://services.boats.com/d41d8cd98f00/pls/boats/search?fields='+fields+facetsList+'&rows='+resultsRows+'&offset='+resultOffset+'&MakeString=Robertson%20and%20Caine%20Leopard,BALI,Bavaria%20Yachts,Bavaria,Beneteau,Beneteau%20Oceanis,%20Beneteau%20First,Beneteau%20Sense,Beneteau%20USA,Catalina,Dufour,Dufour%20Grand%20Large,%20Elan,Elan%20Impression,Fountaine%20Pajot,Gemini%20Catamarans,Gemini%20Catamarans%20Legacy,Gunboat,Hanse,Hanse%20US,Hunter,Hunter%20Deck%20Salon,Hylas,Island%20Packet,Island%20Packet%20Estero,Jeanneau,Jeanneau%20Sun%20Odyssey,Jeanneau%20Deck%20Salon,Jeanneau%20Sloop,Lagoon,Leopard,Maltese%20Catamarans,Marlow%20Hunter,Nautitech,Outbound,OutremerSerene,Tartan,X-Yachts,Antares,Robertson&Caine');
            var proxy = "//www.atlantic-cruising.com/proxy/proxy.php?url=";
            var tpl = _.template('<div id="<%= DocumentID %>" class="boatGridResult">' +
                                    '<div class="boatCard">'+
                                    '<% if (Image) { %>' +
                                           '<div style="background-image:url(\'<%= Image %>\');" class="boatCardImage"></div>' +
                                    '<% } %>' +
                                    '<div class="boatCardDetails">'+
                                        '<h1 class="boatCardHeader"><%= ModelYear %> <%= Model %> <%= MakeString %></h1>'+
                                        '<p><strong>Length:</strong> <%= LengthOverall %> </p>'+
                                        '<p><strong>Price:</strong> <%= Price %> </p>' +
                                        '<p><strong>Location:</strong> <%= Location %> </p>'+
                                    '</div>'+                                        
                                    '<div class="boatCardReadMore">Read More</div>'+
                                    '</div>'+
                                '</div>'
            );

            $boatResults.prepend('<div id="loading"> Loading, please wait...</div>');

            $.getJSON( proxy + url, function(data){
                var results = data.contents.data.results;
                var boatMainImg = '';
                var $boatHTML = '<h2>Results</h2>';
                var resultsCount = data.contents.data.numResults;
                var pageCount = '';
                var $pagersList = '<ul class="pagerList">';

                $boatHTML += '<div id="resultCount"><p>' + resultsCount + ' results found.</p></div><div class="resultsGridWrap">';
                //$boatHTML += '<ul id="resultPages"><li>1</li></ul>'

                if(resultsRows < resultsCount){
                    pageCount = Math.floor(resultsCount / resultsRows);
                }else{
                   pageCount = 1;
                }

                for(var i = 1; i <= pageCount; i++){
                    if(i == offset || pageCount == 1){
                        $pagersList += '<li class="pagerItem activePagerItem"><a class="pagerBtn" data-pageid="'+i+'" href="#">'+i+'</a></li>'
                    }else{
                        $pagersList += '<li class="pagerItem"><a class="pagerBtn" data-pageid="'+i+'" href="#">'+i+'</a></li>'
                    }
                    
                }

                $pagersList += '</ul>';

                $boatHTML += $pagersList;
                
                for(var result in results){

                    if("Images" in results[result]){
                        boatMainImg = results[result].Images[0].Uri;
                    }else{
                        boatMainImg = 'test.gif';
                    }

                    var boat = {
                        DocumentID : results[result].DocumentID,
                        BoatName : results[result].BoatName,
                        LengthOverall : results[result].LengthOverall,
                        Price : results[result].Price,
                        Image : boatMainImg,
                        Location : results[result].BoatLocation.BoatCityName + ', ' + results[result].BoatLocation.BoatStateCode ,
                        MakeString : results[result].MakeString,
                        ModelYear : results[result].ModelYear,
                        Model : results[result].Model,
                    };

                    $boatHTML += tpl( boat );
                
                }

                $boatHTML += $pagersList;
                $boatHTML += '</div>';

                $backBoatHTML = $boatHTML;

                $boatResults.html( $boatHTML );


                if(scrolled == true){
                    scrollToResults();
                }else{
                    scrolled = true;
                }
                

            });
        }

        //Get an individual boat
        function getBoatData(boatID){
            //var url = encodeURIComponent('https://services.boats.com/pls/boats/search?key=d41d8cd98f00&fields='+fields+',AdditionalDetailDescription&DocumentID='+boatID+'&rows=1 ');
            var url = encodeURIComponent('https://services.boats.com/d41d8cd98f00/pls/boats/search?fields='+fields+',AdditionalDetailDescription&DocumentID='+boatID+'&rows=1 ');
            var proxy = "//www.atlantic-cruising.com/proxy/proxy.php?url=";
            var tpl = _.template('<div class="singleBoatResult">'+
                                    '<h1 id="<%= DocumentID %>" class="boatID"><%= BoatName %></h1>'+
                                    '<p id="printThisPage" style="margin-top: 4px;"><a href="javascript:window.print()" style="font-size: 14px; font-weight: bold;">Print This Page</a></p>'+
                                    '<% if (Image) { %>' +
                                           '<div id="singleMainBoatImg" class="singleBoatMainImg" style="background-image:url(\'<%= Image %>\');"></div>'+
                                    '<% } %>' +
                                    '<% if(ImageCollection) { %>'+
                                      '<div class="singleBoatCarouselWrap">'+
                                          '<div class="singleBoatCarousel cf">'+
                                            '<% for(var i = 0; i < ImageCollection.length; ++i) { %>'+
                                              '<div class="singleBoatThumbnail" style="background-image:url(\'<%= ImageCollection[i].Uri %>\');"></div>'+
                                            '<% } %>'+
                                          '</div>'+
                                      '</div>'+
                                      '<div class="printAllImages">'+
                                        '<% for(var i = 0; i < ImageCollection.length; ++i) { %>'+
                                          '<img class="printAllImagesThumbnail" src="<%= ImageCollection[i].Uri %>">'+
                                        '<% } %>'+
                                      '</div>'+                                      
                                    '<% } %>'+
                                    '<% if(VideoCollection) { %>'+
                                            '<div class="video-container">'+
                                                '<p><strong>Videos</strong></p>'+
                                                '<% for(var i = 0; i < VideoCollection.length; ++i) { %>'+
                                                    '<div class="singleBoatVideo">'+
                                                        '<iframe width="560" height="315" src="<%= VideoCollection[i] %>" frameborder="0" allowfullscreen></iframe>'+
                                                    '</div>'+
                                                '<% } %>'+
                                            '</div>'+
                                    '<% } %>'+
                                    '<p><strong>Length:</strong><br> <%= LengthOverall %> </p>'+
                                    '<p><strong>Price:</strong><br> <%= Price %> </p>' +
                                    '<p><strong>Location:</strong><br> <%= Location %> </p>'+
                                    '<div><%= LongDescription %></div>'+
                                    '<hr style="margin-top: 25px;" />'+
                                    '<h3>Contact Us Today!</h3>'+
                                    '<ul class="form-contact-info">' +
                                        '<li><strong>ACY Sales:</strong></li>'+
                                        '<li>+1 443-203-5596</li>'+
                                        '<li>312 Third Street, Suite 102</li>'+
                                        '<li>Annapolis, Maryland USA 21403</li>'+
                                    '</ul>' +
                                    '<p><br/><a id="scrollToBoatInquiry" href="#boatInquiryForm" style="font-weight: bold;">Request Info Form</a><br/>' +
                                    '<a href="javascript:window.print()" style="font-weight: bold;">Print This Page</a></p>' +
                                '</div>'+
                                '<div id="singleBoatContact">'+
                                    '<h2>Request Info</h2>'+
                                    '<hr>'+
                                    '<form id="boatInquiryForm" method="post">'+
                                        '<div class="formRow"><label for="singleBoatName">Name:</label><input type="text" value="" name="sb-name" id="singleBoatName"></div>'+
                                        '<div class="formRow"><label for="singleBoatEmail">Email:</label><input type="text" value="" name="sb-email" id="singleBoatEmail"></div>'+
                                        '<div class="formRow"><label for="singleBoatPhone">Phone:</label><input type="text" value="" name="sb-phone" id="singleBoatPhone"></div>'+
                                        '<div class="formRow"><label for="singleBoatSubject">Subject:</label><input type="text" value="<%= DocumentID %> - <%= BoatName %>" name="sb-subject" id="singleBoatSubject"></div>'+
                                        '<div class="formRow"><label for="singleBoatEnquiry">Questions/Comments:</label><textarea value="" name="sb-enquiry" id="singleBoatEnquiry"></textarea></div>'+
                                        '<input id="sb-submit" type="submit" name="sb-submitted" value="Submit">'+
                                        '<ul class="form-contact-info">' +
                                            '<li><strong>ACY Sales:</strong></li>'+
                                            '<li>+1 443-203-5596</li>'+
                                            '<li>312 Third Street, Suite 102</li>'+
                                            '<li>Annapolis, Maryland USA 21403</li>'+
                                        '</ul>'+
                                    '</form>'+
                                '</div>'
                                );
            
            $boatResults.html('<div id="loading"> Loading, please wait...</div>');

            $.getJSON( proxy + url, function(data){

                var results = data.contents.data.results;
                var boatMainImg = '';
                var imageCollection = '';
                var videoCollection = [];
                var $boatHTML = '<div id="goBackResults">Go Back</div><h2>Results</h2>';
                var $longDescription = '';
                var resultsCount = data.contents.data.numResults;

                $boatHTML += '<div id="resultCount">' + resultsCount + ' results found.<p></p></div>';

                for(var result in results){
                    //console.log(results[result]);
                    if( "Images" in results[result]){
                        boatMainImg = results[result].Images[0].Uri;
                        imageCollection = results[result].Images;
                        //console.log(imageCollection[1].Uri);
                    }else{
                        boatMainImg = 'test.gif';
                    }

                    if("EmbeddedVideo" in results[result]){
                        for(var video in  results[result].EmbeddedVideo ){
                            //This is really rediculous, the api shouldn't format videos in this way
                            //ToDo: Optimize this better, not sure of other edgecases
                            var betterVideoStringSplit = results[result].EmbeddedVideo[video].split('|')
                            var embedVideoCode = betterVideoStringSplit[0].replace("watch?v=", "v/");
                            var fixIfYoutube = embedVideoCode.replace("youtu.be/", "youtube.com/v/");
                            videoCollection.push(fixIfYoutube);
                        }
                        //console.log(videoCollection);
                    }

                    for(var htmlSegment in results[result].AdditionalDetailDescription ){
                        //console.log(results[result].AdditionalDetailDescription[htmlSegment] );
                        var $betterDescription = results[result].AdditionalDetailDescription[htmlSegment].replace(/style="[^"]*"/g, "");
                        $longDescription += $betterDescription;
                    }

                    var boat = {
                        DocumentID : results[result].DocumentID,
                        BoatName : results[result].BoatName,
                        LengthOverall : results[result].LengthOverall,
                        Price : results[result].Price,
                        Image : boatMainImg,
                        Location : results[result].BoatLocation.BoatCityName + ', ' + results[result].BoatLocation.BoatStateCode ,
                        LongDescription: $longDescription,
                        ImageCollection: imageCollection,
                        VideoCollection: videoCollection,
                    };

                    $boatHTML += tpl( boat );
                }

                $boatResults.html( $boatHTML );

                scrollToResults();
            });
        }

        function boatInventoryInit(){
            $searchForm.submit();
            scrolled = false;
        }


        boatInventoryInit();

    });

    //Range slider instantiation for jQuery UI
    $( "#slider-range-price" ).slider({
      range: true,
      min: 100000,
      max: 5000000,
      values: [ 100000, 5000000 ],
      step: 1000,
      slide: function( event, ui ) {
        $( "#boatCost" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });

    $( "#boatCost" ).val( "$" + $( "#slider-range-price" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range-price" ).slider( "values", 1 ) );

    $( "#slider-range-year" ).slider({
      range: true,
      min: 2000,
      max: currentYear, //change to current year
      values: [ 2000, currentYear ],
      slide: function( event, ui ) {
        $( "#boatProductionYear" ).val( ui.values[ 0 ] + " - " + ui.values[ 1 ] );
      }
    });

    $( "#boatProductionYear" ).val( $( "#slider-range-year" ).slider( "values", 0 ) +
      " - " + $( "#slider-range-year" ).slider( "values", 1 ) );

    $( "#slider-range-length" ).slider({
      range: true,
      min: 35,
      max: 100, 
      values: [ 35, 100 ],
      slide: function( event, ui ) {
        $( "#boatLength" ).val( ui.values[ 0 ] + " - " + ui.values[ 1 ] );
      }
    });

    $( "#boatLength" ).val( $( "#slider-range-length" ).slider( "values", 0 ) +
      " - " + $( "#slider-range-length" ).slider( "values", 1 ) );

})( jQuery , _ );
