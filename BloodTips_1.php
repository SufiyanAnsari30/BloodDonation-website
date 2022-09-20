<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php require "BloodDonation.php"?>

    <style>
        .container {
            padding-left: 1%;
            padding-right: 1%;
            padding-bottom: 1%;
            padding-top: 1%;
        }
    </style>
    <div class="container">
        <h2>Blood Tips</h2>
        <div id="accordion">
            <div class="card">
                <div class="card-header">
                    <a class="card-link" data-toggle="collapse" href="#collapseOne">Beat The Myth
                    </a>
                </div>
                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                    <div class="card-body">
                        Donating blood is safe and simple. It takes approximately 10-15 minutes to complete the blood donation process. Any healthy adult between 18 years and 60 years of age can donate blood. This is what you can expect when you are ready to donate blood:
                        You walk into a reputed and safe blood donation centre or a mobile camp organized by a reputed institution.
                        A few questions will be asked to determine your health status (general questions on health, donation history etc). Usually you will be asked to fill out a short form.
                        Then a quick physical check will be done to check temperature, blood pressure, pulse and hemoglobin content in blood to ensure you are a healthy donor.
                        If found fit to donate, then you will be asked to lie down on a resting chair or a bed. Your arm will be thoroughly cleaned. Then using sterile equipments blood will be collected in a special plastic bag. Approximately 350 ml of blood will be collected in one donation. Those who weigh more than 60 Kg can donate 450 ml of blood.
                        Then you must rest and relax for a few minutes with a light snack and something refreshing to drink. Some snacks and juice will be provided.
                        Blood will be separated into components within eight hours of donation
                        The blood will then be taken to the laboratory for testing.
                        Once found safe, it will be kept in special storage and released when required.
                        The blood is now ready to be taken to the hospital, to save lives.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">Blood Groups
                    </a>
                </div>
                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        Blood type is determined by which antibodies and antigens the person's blood produces. An individual has two types of blood groups namely ABO-grouping and Rh-grouping. Rh is called as the Rhesus factor that has come to us from Rhesus monkeys.

                        Most humans are in the ABO blood group. The ABO group has four categories namely
                        1) A group 2) B group 3) O group and 4) AB group
                        In the Rh- group, either the individual is said to be Rh- Negative or Rh- Positive.

                        Thus blood group of any human being will mainly fall in any one of the following groups.
                        A positive or A negative
                        B positive or B negative
                        O positive or O negative
                        AB positive or AB negative.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">Universal Donor And Recipents
                    </a>
                </div>
                <div id="collapseThree" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        The most common blood type is O, followed by type A.

                        Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type. Those with type AB blood are called "universal recipients" because they can receive blood of any type.

                        However, since approximately twice as many people in the general population have O and A blood types, a blood bank's need for this type of blood increases exponentially.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">Do Donate Blood, Only if You Satisfy All Of The  Following Condition
                    </a>
                </div>
                <div id="collapseFour" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        -	You are between age group of 18-60 years.
                        -	Your weight is 45 kgs or more.
                        -	Your hemoglobin is 12.5 gm% minimum.
                        -	Your last blood donation was 3 or more months earlier.
                        -	You are healthy and have not suffered from malaria, typhoid or other transmissible disease in the recent past.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">Do Not Donate Blood,If You Any Of The  Following Condition
                    </a>
                </div>
                <div id="collapseFive" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        -	Cold / fever in the past 1 week.
                        -	Under treatment with antibiotics or any other medication.
                        -	Cardiac problems, hypertension, epilepsy, diabetes (on insulin therapy), history of cancer, chronic kidney or liver disease, bleeding tendencies, venereal disease etc.
                        -	Major surgery in the last 6 months.
                        -	Vaccination in the last 24 hours.
                        -	Had a miscarriage in the last 6 months or have been pregnant / lactating in the last one year.
                        -	Had fainting attacks during last donation.
                        -	Have regularly received treatment with blood products.
                        -	Shared a needle to inject drugs/ have history of drug addiction.
                        -	Had sexual relations with different partners or with a high risk individual.
                        -	Been tested positive for antibodies to HIV.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseSix">A Healthy Donor
                    </a>
                </div>
                <div id="collapseSix" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        A healthy diet helps ensure a successful blood donation, and also makes you feel better! Check out the following recommended foods to eat prior to your donation.

	                    Low fat foods
	                    Iron rich foods       
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseSeven">Blood Bank
                    </a>
                </div>
                <div id="collapseSeven" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        A blood bank is a place designed especially for the storage of blood and blood products. Large coolers hold these products at a constant temperature and they are available at a moment's notice.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseEight">About Blood Donation
                    </a>
                </div>
                <div id="collapseEight" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        Donating blood is a life saving measure especially when you have a rare blood type. Blood donation is safe and simple. It takes only about 10 minutes to donate blood - less than the time of an average telephone call. We can save upto 3 to 4 precious lives by donating blood.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseNine">World Blood Donor Day  
                    </a>
                </div>
                <div id="collapseNine" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        The day is celebrated to raise awareness globally about the need for regular and voluntary blood donation.
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
