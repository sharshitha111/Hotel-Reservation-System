/*home slideshow*/
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 7000); // Change image every 2 seconds
}

//Facilities
function loadData(name){
	if(name=="btn1"){
		document.getElementById("img1").src="./Images/Facilities/food1.jpg";
		document.getElementById("img2").src="./Images/Facilities/food2.jpg";
		document.getElementById("img3").src="./Images/Facilities/food3.jpg";
		document.getElementById("para1").innerHTML="Experience the vibrant flavors of Sri Lanka at our hotel's exquisite food and beverage offerings. Immerse yourself in a culinary journey where traditional Sri Lankan cuisine meets international delights, curated with utmost care and expertise. Indulge in delectable seafood dishes infused with aromatic spices, relish mouthwatering rice and curry combinations that showcase the country's rich culinary heritage, and savor refreshing tropical beverages crafted from locally sourced fruits. Our passionate chefs and attentive staff ensure an unforgettable dining experience, where every meal is a celebration of Sri Lanka's diverse gastronomic landscape.";
	}	
	else if(name=="btn2"){
		document.getElementById("img1").src="./Images/Facilities/adv1.jpg";
		document.getElementById("img2").src="./Images/Facilities/adv2.jpg";
		document.getElementById("img3").src="./Images/Facilities/adv3.jpg";
		document.getElementById("para1").innerHTML="Embark on an exhilarating adventure at our Sri Lankan hotel's thrilling adventure park. Get ready to unleash your inner daredevil as you take on a variety of adrenaline-pumping activities that will leave you breathless and craving for more. Conquer high ropes courses, tackle challenging obstacle courses, and test your agility on zip lines that offer breathtaking views of the surrounding natural beauty. For those seeking a rush of excitement, our rock climbing walls and rappelling stations are sure to satisfy. Whether you're a thrill-seeking enthusiast or a beginner looking for an unforgettable experience, our adventure park offers something for everyone, promising an unforgettable journey of excitement and adventure.";
	}
	else if(name=="btn3"){
		document.getElementById("img1").src="./Images/Facilities/pool1.jpg";
		document.getElementById("img2").src="./Images/Facilities/pool2.jpg";
		document.getElementById("img3").src="./Images/Facilities/pool3.jfif";
		document.getElementById("para1").innerHTML="Dive into a world of relaxation and rejuvenation at our Sri Lankan hotel's stunning swimming pool. Surrounded by lush tropical landscapes, our inviting pool is a tranquil oasis where you can escape the stresses of everyday life. Immerse yourself in the crystal-clear waters and feel the soothing embrace as you swim or simply lounge by the poolside, basking in the warm tropical sun. With its sparkling waters and serene ambiance, our swimming pool provides the perfect setting to unwind and recharge. Whether you're seeking a refreshing dip, a leisurely swim, or simply a peaceful moment of tranquility, our swimming pool offers a haven of serenity and bliss for our valued guests.";
	}
	else if(name=="btn4"){
		document.getElementById("img1").src="./Images/Facilities/boat1.jpg";
		document.getElementById("img2").src="./Images/Facilities/boat2.jpg";
		document.getElementById("img3").src="./Images/Facilities/boat3.jpg";
		document.getElementById("para1").innerHTML="Embark on a picturesque adventure at our Sri Lankan hotel's boat riding area. Nestled amidst the natural splendor of the surrounding landscapes, our boat riding experience offers a serene escape on the tranquil waters of a nearby lake. Step aboard our comfortable boats and let the gentle breeze caress your face as you glide across the shimmering surface. Marvel at the breathtaking scenery that unfolds around you, with lush greenery, majestic mountains, and vibrant wildlife creating an unforgettable backdrop. Whether you choose a peaceful ride for relaxation or an exploration of the lake's hidden gems, our boat riding area promises an idyllic retreat for nature enthusiasts and those seeking a moment of tranquility amidst the beauty of Sri Lanka.";
	}
	else if(name=="btn5"){
		document.getElementById("img1").src="./Images/Facilities/play3.jfif";
		document.getElementById("img2").src="./Images/Facilities/play2.jpg";
		document.getElementById("img3").src="./Images/Facilities/play1.jpg";
		document.getElementById("para1").innerHTML="Experience pure joy and laughter at our Sri Lankan hotel's vibrant playgrounds. Designed to ignite the imagination and energy of children, our playgrounds are a haven for fun and adventure. From swings and slides to climbing structures and interactive play areas, there's no shortage of excitement and entertainment. Watch as children explore their creativity and make new friends in a safe and supervised environment. With colorful surroundings and ample space to run and play, our playgrounds offer endless hours of joy for young guests. Parents can relax and unwind knowing that their children are having the time of their lives in our thoughtfully designed and well-maintained play areas. At our hotel, we believe in creating memories that last a lifetime, and our playgrounds are a testament to that commitment.";
	}
	else if(name=="btn6"){
		document.getElementById("img1").src="./Images/Facilities/cplay1.jpg";
		document.getElementById("img2").src="./Images/Facilities/cplay2.jpg";
		document.getElementById("img3").src="./Images/Facilities/cplay3.jpg";
		document.getElementById("para1").innerHTML="Discover a world of wonder and excitement at our Sri Lankan hotel's enchanting children's play area. Designed with the utmost care and creativity, our play area is a haven for young adventurers. Watch as your little ones immerse themselves in a realm of imagination, laughter, and discovery. From slides and swings to climbing frames and interactive games, our play area offers a delightful array of activities that will keep children engaged and entertained for hours. Safety is our top priority, with soft flooring and age-appropriate equipment ensuring a secure and enjoyable experience. Parents can relax and unwind in the nearby seating area, knowing that their children are exploring, making new friends, and creating cherished memories in our thoughtfully designed children's play area.";
	}
	else if(name=="btn7"){
		document.getElementById("img1").src="./Images/Facilities/car2.jpg";
		document.getElementById("img2").src="./Images/Facilities/car1.jpg";
		document.getElementById("img3").src="./Images/Facilities/car3.jpg";
		document.getElementById("para1").innerHTML="Convenience and ease await you at our Sri Lankan hotel's spacious and well-organized car park. We understand the importance of hassle-free parking, and our dedicated car park ensures that guests can arrive and depart with utmost convenience. With ample parking spaces available, finding a spot for your vehicle is a breeze. Our car park is secure and well-lit, providing peace of mind throughout your stay. Whether you're a business traveler, a family on vacation, or attending an event at our hotel, our car park offers a seamless parking experience, allowing you to focus on enjoying your time with us";
	}
	else if(name=="btn8"){
		document.getElementById("img1").src="./Images/Facilities/tree1.webp";
		document.getElementById("img2").src="./Images/Facilities/tree2.jpg";
		document.getElementById("img3").src="./Images/Facilities/tree3.jpg";
		document.getElementById("para1").innerHTML="Escape to a world of enchantment and tranquility in our Sri Lankan hotel's charming tree houses. Nestled amidst the lush greenery and towering trees, our tree houses offer a unique and unforgettable accommodation experience. Immerse yourself in nature as you unwind in cozy and beautifully designed living spaces, perched high above the ground. From the elevated vantage point, revel in breathtaking views of the surrounding landscapes and relish the peaceful sounds of the forest. Each tree house is thoughtfully crafted to provide comfort and privacy, allowing you to reconnect with nature while enjoying modern amenities. Whether you're seeking a romantic getaway or a family adventure, our tree houses offer a magical retreat that will leave you with cherished memories of your Sri Lankan stay.";
	}
	else if(name=="btn9"){
		document.getElementById("img1").src="./Images/Facilities/museum3.jpg";
		document.getElementById("img2").src="./Images/Facilities/museum1.jpg";
		document.getElementById("img3").src="./Images/Facilities/museum2.jpg";
		document.getElementById("para1").innerHTML="Step into a captivating journey through time and culture at our Sri Lankan hotel's captivating museum. Immerse yourself in the rich tapestry of the island's history and heritage as you explore the curated collection of artifacts and exhibits. From ancient relics to traditional crafts, each display tells a story, shedding light on the diverse and vibrant cultural heritage of Sri Lanka. Engage with interactive exhibits, learn about significant historical events, and marvel at the intricacy of traditional craftsmanship. Our museum provides a unique opportunity to deepen your understanding of Sri Lanka's past, offering an enriching and educational experience for visitors of all ages. Discover the captivating tales and treasures that have shaped the island's identity, and leave with a deeper appreciation for its rich cultural legacy.";
	}
	else{
		alert("Invalid");
	}
}

/*Accomadation page*/
function Acco_loadData(name){
	if(name=="Abtn1"){
		document.getElementById("accamodationimg1").src="./images/Accomadation images/S1.jpg";
		document.getElementById("accamodationimg2").src="./images/Accomadation images/S2.jpg";
		document.getElementById("para1").innerHTML="Our Superior Rooms are designed to cater to the discerning traveler seeking the utmost in comfort and style. Step into a world of sophistication as you enter these spacious and meticulously appointed rooms. Each Superior Room boasts an exquisite blend of contemporary design and timeless charm, providing a sanctuary of serenity during your stay. From plush furnishings to state-of-the-art amenities, we have thoughtfully curated every detail to ensure your utmost satisfaction. Prepare to be captivated by the panoramic views of our stunning surroundings, complemented by the convenience of modern technology. Indulge in the epitome of indulgence and make your stay at the Sky Blue Hotel an unforgettable one in our Superior Rooms.";
	}	
	else if(name=="Abtn2"){
		document.getElementById("accamodationimg1").src="./images/Accomadation images/St1.jpg";
		document.getElementById("accamodationimg2").src="./images/Accomadation images/St2.jpg";
		document.getElementById("para1").innerHTML="Our Standard Rooms are the perfect choice for guests seeking a cozy and inviting retreat. Designed with your utmost comfort in mind, these rooms provide a peaceful haven after a day of exploration or business meetings. Immerse yourself in the warm and welcoming ambiance, featuring tasteful decor and all the essential amenities you need for a pleasant stay. Whether you're traveling alone or with a companion, our Standard Rooms offer a comfortable and convenient base to relax and rejuvenate. Experience our genuine hospitality and enjoy a restful night's sleep in our inviting Standard Rooms at the Sky Blue Hotel.";
	}
	else if(name=="Abtn3"){
		document.getElementById("accamodationimg1").src="./images/Accomadation images/B1.jpg";
		document.getElementById("accamodationimg2").src="./images/Accomadation images/B2.jpg";
		document.getElementById("para1").innerHTML=" Let us introduce you to our exclusive Business Executive Rooms, designed with the discerning professional in mind, our Business Executive Rooms offer an elevated experience tailored to meet your business needs. Equipped with modern amenities, ergonomic workspaces, and high-speed internet access, these rooms provide a tranquil yet productive environment. After a day of meetings and conferences, unwind in the comfort of these stylishly appointed rooms, ensuring a seamless transition between work and relaxation. Experience the perfect balance of productivity and comfort with our Business Executive Rooms at Sky Blue Hotel.";
	}
	else if(name=="Abtn4"){
		document.getElementById("accamodationimg1").src="./images/Accomadation images/E1.jpg";
		document.getElementById("accamodationimg2").src="./images/Accomadation images/E2.jpg";
		document.getElementById("para1").innerHTML=" Let us introduce you to our Eco Rooms, designed with eco-conscious travelers in mind. These thoughtfully crafted spaces combine modern amenities with environmentally friendly practices, ensuring a stay that minimizes your carbon footprint. From energy-efficient lighting to water-saving fixtures, every detail is curated to provide a sustainable yet comfortable stay. Immerse yourself in an eco-friendly haven, where you can relax and rejuvenate while knowing that you're making a positive impact on the planet. Embrace a greener way of travel with our Eco Rooms at Sky Blue Hotel.";
	}
	else if(name=="Abtn5"){
		document.getElementById("accamodationimg1").src="./images/Accomadation images/C1.jpg";
		document.getElementById("accamodationimg2").src="./images/Accomadation images/C2.jpg";
		document.getElementById("para1").innerHTML=" We provide a unique Camping experience, immerse yourself in the beauty of the great outdoors with our Camping option. Nestled in the picturesque surroundings, our camping area offers a refreshing escape from the hustle and bustle of daily life. Whether you're a seasoned adventurer or a nature enthusiast, our Camping experience is designed to provide a tranquil and immersive stay. Wake up to the melodious chirping of birds, breathe in the crisp morning air, and unwind under the starlit sky. At Sky Blue Hotel, we bring you the best of both worlds - luxurious comforts and a memorable connection with nature.";
	}
	else{
		alert("Invalid");
	}
}

//Register Form
function checkPassword(){
	if(document.getElementById("pwd").value!=document.getElementById("confirmpwd").value)
	{
		alert("Password Mismatched");
		return false;
	}
	else
	{
		return true;
	}
}

function enablebutton(){
	if(document.getElementById("checkbox").checked){
		document.getElementById("submitBtn").disabled=false;
	}
	else{
		document.getElementById("submitBtn").disabled=true;
	}
		
}


//Contact us
function con_alert(){
	alert("Your message is sent.");
}

//if customer click go back Button
function go_back_button_function(link) {
    
    console.log(link.value);
    location.href=link.value;
    
    }