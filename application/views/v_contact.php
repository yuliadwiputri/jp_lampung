<div class="features">
    <!-- Contact -->

    <div class="contact">

        <!-- Contact Map -->


        <!-- Contact Info -->

        <div class="contact_info_container">
            <div class="container">
                <div class="row">
                    <div class="contact_map">

                        <!-- Google Map -->


                        <div class="col">
                            <div id="map" style="height: 200px;"></div>

                        </div>

                    </div>
                </div>
                <div class="row">

                    <!-- Contact Form -->
                    <div class="col-lg-6">
                        <div class="contact_form">
                            <!-- <div class="contact_info_title">Contact Form</div>
                            <form action="#" class="comment_form">
                                <div>
                                    <div class="form_title">Name</div>
                                    <input type="text" class="comment_input" required="required">
                                </div>
                                <div>
                                    <div class="form_title">Email</div>
                                    <input type="text" class="comment_input" required="required">
                                </div>
                                <div>
                                    <div class="form_title">Message</div>
                                    <textarea class="comment_input comment_textarea" required="required"></textarea>
                                </div>
                                <div>
                                    <button type="submit" class="comment_button trans_200">submit now</button>
                                </div>
                            </form>
                        </div> -->
                    </div>

                    <!-- Contact Info -->
                    <div class="col-lg-6">
                        <div class="contact_info">
                            <!-- <div class="contact_info_title">Contact Info</div>
                            <div class="contact_info_text">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a distribution of letters.</p>
                            </div>
                            <div class="contact_info_location">
                                <div class="contact_info_location_title">New York Office</div>
                                <ul class="location_list">
                                    <li>T8/480 Collins St, Melbourne VIC 3000, New York</li>
                                    <li>1-234-567-89011</li>
                                    <li>info.deercreative@gmail.com</li>
                                </ul>
                            </div>
                            <div class="contact_info_location">
                                <div class="contact_info_location_title">Australia Office</div>
                                <ul class="location_list">
                                    <li>Forrest Ray, 191-103 Integer Rd, Corona Australia</li>
                                    <li>1-234-567-89011</li>
                                    <li>info.deercreative@gmail.com</li>
                                </ul> -->
                            </div>
                        </div> 
                    </div> 
                </div>
            </div>
        </div> 
    </div>
</div>
<script>
    const map = L.map('map').setView([-5.431487, 105.261850], 13);

    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {

        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    const marker = L.marker([-5.431487, 105.261850]).addTo(map)
		.bindPopup('Branch Office Bandar Lampung').openPopup();

    const marker1 = L.marker([-3.474373, 102.533856]).addTo(map)
		.bindPopup('Unit Layanan Curup').openPopup();

        const marker2 = L.marker([-5.868131524375194, 105.75534740170127]).addTo(map)
		.bindPopup('Unit Layanan Klaim Bakauheni').openPopup();

        const marker3 = L.marker([-3.798568029870107, 102.27109680299276]).addTo(map)
		.bindPopup('Marketing Officer Bengkulu').openPopup();

        
</script><a href=""></a>