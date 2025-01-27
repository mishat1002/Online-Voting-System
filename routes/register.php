<html>
    <head>
        <title>Online voting system - Registratrion</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
        <style>
            body{
      
                      background: url(../Picture/05.jpg);
                      background-repeat: no-repeat;
                      background-size: 120%;
                }

            .button {
                          background-color: black;
                          border: none;
                          color: white;
                          padding: 15px 32px;
                          text-align: center;
                          text-decoration: none;
                          display: inline-block;
                          font-size: 20px;
                          margin: 4px 2px;
                          cursor: pointer;
                    }
        </style>

        <script>
        var subjectObject = 
        {
            "Barisal Division": 
            {
                "Barguna": ["Amtali Upazila", "Bamna Upazila", "Barguna Sadar Upazila", "Betagi Upazila", "Patharghata Upazila"],

                "Barishal": ["Agailjhara Upazila", "Babuganj Upazila", "Bakerganj Upazila", "Banaripara Upazila", "Barisal Sadar Upazila", "Gournadi Upazila", "Hizla Upazila", "Mehendiganj Upazila", "Muladi Upazila", "Wazirpur Upazila"],

                "Bhola": ["Bhola Sadar Upazila", "Burhanuddin Upazila", "Charfasson Upazila", "Daulatkhan Upazila", "Lalmohan Upazila", "Manpura Upazila", "Tazumuddin Upazila"],

                "Jhalakati": ["Jhalokati Sadar Upazila", "Kathalia Upazila", "Nalchity Upazila", "Rajapur Upazila"],

                "Patuakhali": ["Bauphal Upazila", "Dashmina Upazila", "Galachipa Upazila", "Kalapara Upazila", "Mirzaganj Upazila", "Patuakhali Sadar Upazila"],

                "Pirojpur": ["Bhandaria Upazila", "Kawkhali Upazila", "Mathbaria Upazila", "Nazirpur Upazila", "Nesarabad Upazila", "Pirojpur Sadar Upazila"]
            },
            "Chittagong Division": 
            {
                
                "Bandarban": ["Alikadam Upazila", "Bandarban Sadar Upazila", "Lama Upazila", "Naikhongchhari Upazila", "Rowangchhari Upazila ", "Ruma Upazila", "Thanchi Upazila"],
                
                "Brahmanbaria": ["Akhaura Upazila", "Bancharampur Upazila", "Brahmanbaria Sadar Upazila", "Kasba Upazila", "Nabinagar Upazila", "Nasirnagar Upazila", "Sarail Upazila"],

                
                "Chandpur": ["Chandpur Sadar Upazila", "Faridganj Upazila", "Haimchar Upazila", "Hajiganj Upazila", "Kachua Upazila", "Matlab Upazila", "Shahrasti Upazila"],

            
                "Chittagong": ["Anwara Upazila", "Bandar (Chittagong Port) Thana", "Banshkhali Upazila", "Boalkhali Upazila", "Chandanaish Upazila", "Chandgaon Thana", "Double Mooring Thana", " Fatikchhari Upazila", "Hathazari Upazila", "Kotwali Thana", "Lohagara Upazila", " Mirsharai Upazila", "Pahartali Thana", "Panchlaish Thana", "Patiya Upazila", "Rangunia Upazila", "Raozan Upazila", "Sandwip Upazila", "Satkania Upazila", "Sitakunda Upazila"],

            
                "Comilla": ["Barura Upazila", "Brahmanpara Upazila", "Burichang Upazila", "Chandina Upazila", "Chauddagram Upazila", "Comilla Sadar Upazila", "Daudkandi Upazila", "Debidwar Upazila", "Homna Upazila", "Laksham Upazila", "Muradnagar Upazila", "Nangalkot Upazila"],
            
                "Cox’s Bazar": ["Chakaria Upazila", "Coxs Bazar Sadar Upazila", "Kutubdia Upazila", "Maheshkhali Upazila", "Ramu Upazila", "Teknaf Upazila", "Ukhia Upazila"],
             
                "Feni": ["Chhagalnaiya Upazila", "Daganbhuiyan Upazila", "Feni Sadar Upazila", "Parshuram Upazila", "Phulgazi Upazila", "Sonagazi Upazila"],

                "Khagrachhari": ["Dighinala Upazila", "Khagrachhari Sadar Upazila", "Lakshmichhari Upazila", "Mahalchhari Upazila", "Manikchhari Upazila", "Matiranga Upazila", "Panchhari Upazila", "Ramgarh Upazila"],
            
                "Lakshmipur": ["Lakshmipur Sadar Upazila", "Raipur Upazila", "Ramganj Upazila", "Ramgati Upazila"],
    
            
                "Noakhali": ["Begumganj Upazila", "Chatkhil Upazila", "Companiganj Upazila", "Hatiya Upazila", "Noakhali Sadar Upazila", "Senbagh Upazila"],

    
                "Rangamati": ["Baghaichhari Upazila", "Barkal Upazila", "Belaichhari Upazila", "Juraichhari Upazila", "Kaptai Upazila", "Kawkhali Upazila", "Langadu Upazila", " Nannerchar Upazila", "Rajasthali Upazila", "Rangamati Sadar Upazila"]
            },

            "Khulna Division": 
            {
                    "Bagherhat": ["Bagerhat Sadar Upazila", "Chitalmari Upazila", "Fakirhat Upazila", "Kachua Upazila", "Mollahat Upazila", "Mongla Upazila ", "Rampal Upazila Upazila", "Sarankhola Upazila"],

                    "Chuadanga": ["Alamdanga Upazila", "Chuadanga Sadar Upazila", "Damurhuda Upazila", "Jibannagar Upazila"],

                    "Jashore": ["Abhaynagar Upazila", "Bagherpara Upazila", "Chaugachha Upazila", "Jashore Sadar Upazila", "Jhikargachha Upazila", "Keshabpur Upazila", "Manirampur Upazila", "Sharsha Upazila",],

                    "Jinaidaha": ["Harinakunda Upazila", "Jhenaidaha Sadar Upazila", "Kaliganj Upazila", "Kotchandpur Upazila", "Maheshpur Upazila", "Shailkupa Upazila"],

                    "Khulna": ["Batiaghata Upazila", "Dacope Upazila", "Daulatpur Thana", "Dighalia Upazila", "Dumuria Upazila", "Khalishpur Thana", "Khan Jahan Ali Thana", "Kotwali Thana", "Koyra Upazila", "Paikgachha Upazila", "Phultala Upazila", "Rupsa Upazila", "Sonadanga Thana", "Terokhada Upazila"],

                    "Kushtia": ["Bheramara Upazila", "Daulatpur Upazila", "Khoksa Upazila", "Kumarkhali Upazila", "Kushtia Sadar Upazila", "Mirpur Upazila"],

                    "Magura": ["Magura Sadar Upazila", "Magura Sadar Upazila", "Salikha Upazila", "Sreepur Upazila"],

                    "Meherpur": ["Gangni Upazila", "Meherpur Sadar Upazila"],


                    "Narail": ["Kalia Upazila", "Lohagara Upazila", "Narail Sadar Upazila"],

                    "Satkhira": ["Assasuni Upazila", "Debhata Upazila", "Kalaroa Upazila", "Kaliganj Upazila", "Satkhira Sadar Upazila", "Shyamnagar Upazila", "Tala Upazila"]
            },


            "Dhaka Division": 
            {
                 "Dhaka": ["Badda Thana", "Cantonment Thana", "Demra Thana", "Dhamrai Upazila", "Dhanmondi Thana", "Dohar Upazila", "Gulshan Thana", "Hazaribagh Thana", "Kafrul Thana", "Kamrangir Char Thana", "Keraniganj Upazila", "Khilgaon Thana", "Kotwali Thana", "Lalbagh Thana", "Mirpur Thana", "Mohammadpur Thana", "Motijheel Thana", "Nawabganj Upazila", "Pallabi Thana", "Ramna Thana", "Sabujbagh Thana", "Savar Upazila", " Shyampur Thana", "Sutrapur Thana", "Tejgaon Thana", "Uttara Thana"],

                "Faridpur": ["Alfadanga Upazila", "Bhanga Upazila", "Boalmari Upazila", "Char Bhadrasan Upazila", "Faridpur Sadar Upazila", "Madhukhali Upazila", "Nagarkanda Upazila", "Sadarpur Upazila"],

                
                "Gazipur": ["Gazipur Sadar Upazila", "Kaliakair Upazila", "Kaliganj Upazila", "Kapasia Upazila", "Sreepur Upazila"],

                
                "Gopalganj": ["Gopalganj Sadar Upazila", " Kashiani Upazila", "Kotalipara Upazila", "Muksudpur Upazilar", "Tungipara Upazila"],

                
                "Jamalpur": ["Baksiganj Upazila", "Dewanganj Upazila", "Islampur Upazila", "Jamalpur Sadar Upazila", "Madarganj Upazila", "Melandaha Upazila", "Sarishabari Upazila"],

                
                "Kishoreganj": ["Austagram", "Itna", "Katiadi", "Karimganj", "Kishoreganj Sadar", "Kuliarchar", "Tarail", "Nikli", "Pakundia", "Bajitpur", "Bhairab", "Mithamain", "Hossainpur"],

                
                "Madaripur": ["Kalkini Upazila", "Madaripur Sadar Upazila", "Rajoir Upazila", " Shibchar Upazila"],

                
                "Manikganj": ["Doulatpur", "Gheor", "Lechhraganj", "Manikganj Sadar", "Saturia", "Shibloya", "Singari"],

                
                "Munshiganj": ["Gazaria Upazila", "Lohajang Upazila", "Munshiganj Sadar Upazila", "Serajdikhan Upazila", "Sreenagar Upazila", "Tongibari Upazila"],

                
                "Mymensingh": ["Bhaluka Upazila", "Dhobaura Upazila", "Fulbaria Upazila", "Gaffargaon Upazila", "Gauripur Upazila", "Haluaghat Upazila", "Ishwarganj Upazila", "Muktagachha Upazila", "Muktagachha Upazila", "Nandail Upazila", "Phulpur Upazila", "Trishal Upazila"],

                "Narayanganj": ["Araihazar Upazila", "Bandar Upazila", "Narayanganj Sadar Upazila", "Rupganj Upazila", "Sonargaon Upazila"],


                
                "Narshingdi": ["Belabo Upazila", "Monohardi Upazila", "Narsingdi Sadar Upazila", "Palash Upazila", "Raipura Upazila", "Shibpur Upazila"],

                
                "Netrakona": ["Atpara Upazila", "Barhatta Upazila", "Durgapur Upazila", "Kalmakanda Upazila", "Kendua Upazila", "Khaliajuri Upazila", "Madan Upazila", "Mohanganj Upazila", "Netrokona Sadar Upazila", "Purbadhala Upazila"],

                
                "Rajbari": ["Baliakandi Upazila", "Goalandaghat Upazila", "Pangsha Upazila", "Rajbari Sadar Upazila"],

                
                "Shariatpur": ["Bhedarganj Upazila", "Damudya Upazila", "Gosairhat Upazila", "Naria Upazila", "Shariatpur Sadar Upazila", "Zanjira Upazila"],


                "Sherpur": ["Jhenaigati Upazila", "Nakla Upazila", "Nalitabari Upazila", "Sherpur Sadar Upazila", "Sreebardi Upazila"],

                "Tangail ": ["Basail Upazila", "Bhuapur Upazila", "Delduar Upazila", "Ghatail Upazila", "Gopalpur Upazila", "Kalihati Upazila", "Madhupur Upazila", "Mirzapur Upazila", "Nagarpur Upazila", "Sakhipur Upazila", "Tangail Sadar Upazila"]
            },


            "Rajshahi Division":
            {
                "Bogra": ["Adamdighi Upazila", "Bogra Sadar Upazila", "Dhunat Upazila", "Dupchanchia Upazila", "Gabtali Upazila", "Kahaloo Upazila", "Nandigram Upazila", "Sariakandi Upazila", "Sherpur Upazila", "Shibganj Upazila", "Sonatola Upazila"],

                "Joypurhat": ["Akkelpur Upazila", "Joypurhat Sadar Upazila", "Kalai Upazila", "Khetlal Upazila", "Panchbibi Upazila"],

                "Naogaon": ["Atrai Upazila", "Badalgachhi Upazila", "Dhamoirhat Upazila", "Mahadevpur Upazila", "Manda Upazila", "Naogaon Sadar Upazila", "Niamatpur Upazila", "Patnitala Upazila", "Porsha Upazila", "Raninagar Upazila", "Sapahar Upazila"],

                "Natore": ["Bagatipara Upazila", "Baraigram Upazila", "Gurudaspur Upazila", " Lalpur Upazila", "Natore Sadar Upazila", "Singra Upazila"],

                "Chapai-Nawabganj": ["Bholahat Upazila", "Gomastapur Upazila", "Nachole Upazila", "Nawabganj Sadar Upazila", "Shibganj Upazila"],

                "Pabna": ["Atgharia Upazila", "Bera Upazila", "Bhangura Upazila", "Chatmohar Upazila", "Faridpur Upazila", "Ishwardi Upazila", "Pabna Sadar Upazila", "Santhia Upazila", "Sujanagar Upazila"],

                "Rajshahi ": ["Bagha Upazila", "Bagmara Upazila", "Boalia Thana", "Charghat Upazila", "Durgapur Upazila", "Godagari Upazila", "Matihar Thana", "Mohanpur Upazila", "Paba Upazila", "Puthia Upazila", "Rajpara Thana", "Shah Mokdum Thana", "Tanore Upazila"],

                "Sirajganj": ["Belkuchi Upazila", "Chauhali Upazila", "Kamarkhanda Upazila", "Kazipur Upazila", "Raiganj Upazila", "Shahjadpur Upazila", "Sirajganj Sadar Upazila", "Tarash Upazila", "Ullahpara Upazila"]

            },

            "Rangpur Division":
            {
                "Dinajpur": ["Biral Upazila", "Birampur Upazila", "Birganj Upazila", "Bochaganj Upazila", "Chirirbandar Upazila", "Dinajpur Sadar Upazila", "Ghoraghat Upazila", "Hakimpur Upazila", "Kaharole Upazila", "Khansama Upazila", "Nawabganj Upazila", "Parbatipur Upazila", "Phulbari Upazila"],

                "Gaibandha": ["Fulchhari Upazila", "Gaibandha Sadar Upazila", "Gobindaganj Upazila", "Palashbari Upazila", "Sadullapur Upazila", "Sughatta Upazila", "Sundarganj Upazila"],

                "Kurigram": ["Bhurungamari Upazila", "Char Rajibpur Upazila", "Chilmari Upazila", "Kurigram Sadar Upazila", "Nageshwari Upazila", "Phulbari Upazila", "Rajarhat Upazila", "Raumari Upazila", "Ulipur Upazila"],

                "Lalmonirhat": ["Amtali Upazila", "Hatibandha Upazila", "Kaliganj Upazila", " Lalmonirhat Sadar Upazila", " Patgram Upazila"],

                "Nilphamari": ["Dimla Upazila", "Domar Upazila", "Jaldhaka Upazila", "Kishoreganj Upazila", "Nilphamari Sadar Upazila", "Saidpur Upazila"],

                "Panchagarh": ["Atrai Upazila", "Boda Upazila", "Debiganj Upazila", "Panchagarh Sadar Upazila", "Tentulia Upazila"],

                "Rangpur ": ["Badarganj Upazila", "Gangachara Upazila", "Kaunia Upazila", "Mithapukur Upazila", "Pirgachha Upazila", "Pirganj Upazila", "Rangpur Sadar Upazila", "Taraganj Upazila"],

                "Thakurgaon": ["Baliadangi Upazila", "Haripur Upazila", "Pirganj Upazila", "Ranisankail Upazila", "Thakurgaon Sadar Upazila"]
            },


            "Sylhet Division":
            {
                "Habiganj": ["Ajmiriganj Upazila", "Baniachang Upazila", "Bahubal Upazila", "Chunarughat Upazila", "Habiganj Sadar Upazila", "Lakhai Upazila", "Madhabpur Upazila", "Nabiganj Upazila"],

                "Maulvi Bazar": ["Barlekha Upazila", "Kamalganj Upazila", "Kulaura Upazila", "Maulvi Bazar Sadar Upazila", "Rajnagar Upazila", "Sreemangal Upazila"],

                "Sunamganj": ["Bishwamvarpur Upazila", "Chhatak Upazila", "Derai Upazila", "Dharmapasha Upazila", "Dowarabazar Upazila", "Jagannathpur Upazila", "Jamalganj Upazila", "Sullah Upazila", "Sunamganj Sadar Upazila", "Tahirpur Upazila"],


                "Sylhet": ["Balaganj Upazila", "Beanibazar Upazila", "Bishwanath Upazila", "Companiganj Upazila", "Fenchuganj Upazila", "Golabganj Upazila", "Gowainghat Upazila", "Jaintiapur Upazila", "Kanaighat Upazila", "Sylhet Sadar Upazila", "Zakiganj Upazila"]

            }


        }

        window.onload = function() 
        {
                var subjectSel = document.getElementById("division");
                var topicSel = document.getElementById("district");
                var chapterSel = document.getElementById("village");
                for (var x in subjectObject) 
                {
                    subjectSel.options[subjectSel.options.length] = new Option(x, x);
                }
            subjectSel.onchange = function() 
            {
                //empty Chapters- and Topics- dropdowns
                chapterSel.length = 1;
                topicSel.length = 1;
                //display correct values
                for (var y in subjectObject[this.value]) 
                {
                    topicSel.options[topicSel.options.length] = new Option(y, y);
                }
            }
            topicSel.onchange = function() 
            {
                //empty Chapters dropdown
                chapterSel.length = 1;
                //display correct values
                var z = subjectObject[subjectSel.value][this.value];
                for (var i = 0; i < z.length; i++) 
                {
                    chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
                }
            }
        }   
        

    </script>
    </head>
    <body>
         &nbsp;&nbsp;&nbsp;<img src="../Picture/02.png" height="15%" width="100%">
         <hr>
         <p align="left"><a href="../" class="button">Login</a>
         <p align="right"><a href="../" class="button">Back</a></p>
        <center>
            <div id="headerSection">
            <h1>Online Voting System</h1>  
            </div>
            

            <h2>Registration</h2>
                <form action="../api/register.php" method="POST" enctype="multipart/form-data" name="reg_form" onsubmit="return validate()">
                    <input type="text" name="name" placeholder="Name">&nbsp
                    <input type="number" name="mob" placeholder="Mobile"><br><br>
                    <input type="number" name="nid" placeholder="Enter your NID No"><br><br>
                    <input type="password" name="pass" placeholder="Password" >&nbsp
                    <input type="password" name="cpass" placeholder="Confirm Password" ><br><br>
                    <select id="division" name="division">
                        <option value="" selected="selected">Select division</option>
                     </select>
                    <select id="district" name="district">
                         <option value="" selected="selected">Please Select division First</option>
                    </select><br><br>
                    <select id="village" name="village">
                        <option value="" selected="selected">Please Select District First</option>
                    </select><br><br>
                    <select name="word_no">
                        <option value="">Please Select Word No</option>
                        <option value="1">1(১)</option>
                        <option value="2">2(২)</option>
                        <option value="3">3(৩)</option>
                        <option value="4">4(৪)</option>
                        <option value="5">5(৫)</option>
                        <option value="6">6(৬)</option>
                        <option value="7">7(৭)</option>
                        <option value="8">8(৮)</option>
                        <option value="9">9(৯)</option>
                        <option value="10">10(১০)</option>
                        <option value="11">11(১১)</option>
                        <option value="12">12(১২)</option>
                        <option value="13">13(১৩)</option>
                        <option value="14">14(১৪)</option>
                        <option value="15">15(১৫)</option>
                        <option value="16">16(১৬)</option>
                        <option value="17">17(১৭)</option>
                        <option value="18">18(১৮)</option>
                        <option value="19">19(১৯)</option>
                        <option value="20">20(২০)</option>
            </select><br><br>
                    <input style="width: 31%" type="text" name="add" placeholder="Your Details Address"><br><br>
                    <div id="upload" style="width: 30%">
                        Upload image: <input type="file" id="profile" name="image">
                    </div><br>
                    <input type="text" name="email"  placeholder="Enter Your Email"><br><br>
                <select name="role">
                    <option value="1">voter</option>
                </select><br><br>
                    
                    <button class="button" type="submit"><i>Register</i></button>
                </form>
            </center>

    <script type="text/javascript">
    function validate()
    {
        var name= document.forms["reg_form"]["name"].value;
        var mob= document.forms["reg_form"]["mob"].value;
        var nid= document.forms["reg_form"]["nid"].value;
        var email= document.forms["reg_form"]["email"].value;
        var division= document.forms["reg_form"]["division"].value;
        var district= document.forms["reg_form"]["district"].value;
        var village= document.forms["reg_form"]["village"].value;
        var word_no= document.forms["reg_form"]["word_no"].value;
        var image= document.forms["reg_form"]["image"].value;



       //Name Validation
        if (name == "") 
        {
            alert("PLEASE FILL THE FIRST NAME BOX");
            return false;
        }
        if (!isNaN(name)) 
        {
            alert("There is no number inside the name");
            return false;
        }

        //EMAIL validation

        var at=email.indexOf("@");
        var dot=email.lastIndexOf("."); 
        if (at<1 || dot<at+2 || dot+2>=email.length)
        {  
            alert("PLEASE INSERT A VALID EMAIL ADRESS \n\n(abc@gmail.com)");  
            return false;  
        }  

        //Phone No. Validation

        if (mob == "") 
        {
            alert("PLEASE FILL THE PHONE NO FIELD");
            return false;
        } 
        if (isNaN(mob)) 
        {
            alert("Phone Number only carry digits.");
            return false;
        }
        if (mob.length!=11) 
        {
            alert("Phone number must be 11 desit");
            return false;       
        }

        //Diviision
        if (division == "") 
        {
            alert("FILL THE DIVISION FIELD");
            return false;
        }
        if (!isNaN(division)) 
        {
            alert("DIVISION DOES NOT CARRY ANY DIGIT");
            return false;
        }


        //District
        if (district == "") 
        {
            alert("FILL THE DISTRICT FIELD");
            return false;
        }
        if (!isNaN(district)) 
        {
            alert("DISTRICT DOES NOT CARRY ANY DIGIT");
            return false;
        }

        //VILLAGE
        if (village == "") 
        {
            alert("FILL THE VILLAGE FIELD");
            return false;
        }

        //Word_no
        if (word_no == "") 
        {
            alert("FILL THE Word no fields");
            return false;
        }

        //National ID

        if (nid == "") 
        {
            alert("PLEASE FILL THE NATIONAL ID");
            return false;
        }
        if (isNaN(nid)) 
        {
            alert("Please input valid national id");
            return false;
        }
        if (nid.length!=10 && nid.length!=14) 
        {
            alert("Please insert 10 and 14 digits numbers");
            return false;
        }
        if (image == "") 
        {
            alert("PLEASE fill the image field");
            return false;
        }

    }
</script>
    </body>
</html>