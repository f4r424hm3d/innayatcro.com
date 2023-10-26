@extends('front.layouts.main')
@push('seo_meta_tag')
  @include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
  <!-- Start Bredcrumb Area -->
  <section class="breadcumb-area pt-70 pb-70" style="background-image: url('assets/img/breadcrumb.png')">
    <div class="container">
      <h2>Frequently Asked Questions</h2>
      <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li>About Us</li>
        <li>FAQ</li>
      </ul>
    </div>
  </section>
  <!-- End Bredcrumb Area -->

  <section class="team-section-area pt-110 pb-10" id="Antenatal">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-title">
            <h2>Q & A (Antenatal)</h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="faq-area pb-110">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-lg-10">
          <div class="accordion faq-custom" id="faqAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">Should I get genetic
                  testing done and is the service provided here?</button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">Yes, you should. Prenatal testing is a way to check to see if your baby
                  might carry certain genetic abnormalities, such as chromosomal or neural tube defects. Only 3 to 5
                  percent of all pregnancies have a birth defect or genetic condition. However, if you are in the higher
                  risk group that includes women older than 35, those with a history of medical abnormalities in a
                  previous pregnancy, and those who are carriers for specific genetic conditions, it is highly essential
                  to get genetic testing done. Besides, we provide this service at our clinic as well.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Is it okay that I'm
                  feeling cramping or have some bleeding?</button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">Some cramping or spotting is normal in the first trimester, as a fertilized
                  egg implants and begins to grow inside the uterus. Unless you are experiencing persistent cramping
                  and/or bleeding you should visit us for a check-up.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Can I
                  breastfeed my child if I am sick</button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">Yes, you can and you should. If you are experiencing normal flu, cough,
                  fever, or viral infection, you can still breastfeed your child. Inconsistency in breastfeeding leads
                  to breast engorgement which can develop into a breast abscess. Hence, it is always important to
                  breastfeed your child on both sides to prevent engorgement. It is to note that there are some special
                  conditions to not breastfeed your child. That is, HIV, Covid-19, and Hepatitis B.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Can I exercise
                  during pregnancy?</button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">Yes, you can! Staying active is good for you and your baby. It can help you
                  control weight gain, improve fitness, reduce high blood pressure, improve sleep, and improve your
                  mood.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">What can I do to
                  reduce or prevent heart burns?</button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">Heartburn is also common in pregnant women. It happens because the uterus
                  is growing and the production of progesterone is increasing, which results in more relaxed stomach
                  muscles and more acid in the esophagus. Certain tricks can be used to prevent or relieve this
                  unpleasant condition, and most work by reducing the acid flow. A woman can eat smaller and more
                  frequent meals, drink ginger root tea once in a while, take short walks after meals, wear loose
                  clothes, and keep her chest and head elevated while sleeping.</div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="team-section-area pt-110 pb-10 section-bg" id="Fertility">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-title">
            <h2>Q & A (Fertility)</h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="faq-area pb-110 section-bg">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-lg-10">
          <div class="accordion faq-custom" id="faqAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">Can I get pregnant
                  with PCOS?</button>
              </h2>
              <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">Yes, you can. PCOS is a condition of insulin resistance, it is not a
                  disease. The right intervention of treatment, a healthy diet, and lifestyle will increase the chances
                  of getting pregnant with PCOS.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingSeven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">How does my age
                  affect my fertility?</button>
              </h2>
              <div id="collapseSeven" class="accordion-collapse collapse show" aria-labelledby="headingSeven"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">We are born with all our eggs and they get older with us, and alas harder
                  to fertilize. Fertility starts to decline beyond age 35. If a woman is under age 35, we encourage
                  women to seek medical attention if she has been trying to conceive for a year or more and hasn’t been
                  able to conceive. If a woman is 35 or older, we encourage her to check in with us after about 6 months
                  of trying.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingEight">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">Should both me
                  and my partner get tested for fertility assessment?</button>
              </h2>
              <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">Absolutely! About 50% of infertility is due to male factors and
                  fortunately, it is really easy to test. SFA is done and the results will help you get a clearer
                  picture of your fertility issues.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingNine">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">If I am having
                  problems conceiving, do I have to start IVF?</button>
              </h2>
              <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">Not necessarily. There are many simple medications that can help women
                  ovulate, and if the fallopian tubes are blocked, sometimes even the test can detect that. There are
                  various procedures like IUI that can help in pregnancy. Hence, there is no immediate need for IVF.
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="team-section-area pt-110 pb-10" id="Common">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-title">
            <h2>Q & A Common Query</h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="faq-area pb-110">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-lg-10">
          <div class="accordion faq-custom" id="faqAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">What should I do
                  before i get pregnant to ensure a healthy pregnancy for me and my baby?</button>
              </h2>
              <div id="collapseTen" class="accordion-collapse collapse show" aria-labelledby="headingTen"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">Get a good balancing diet, folic acid supplements. Medical screening for
                  diabetes and other medical problems like hypertension, thyroid disorders are essential before
                  embarking on your pregnancy. Seek pre-pregnancy advice and counseling from a gynecologist.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingEleven">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">What should
                  and shouldn't eat while I am pregnant?</button>
              </h2>
              <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">Ensure there is a balanced diet with high protein and fiber intake, eg:
                  more green leafy vegetables, whole wheat, and cereals; avoid partially cooked meat, big fishes which
                  contains a high level of mercury, unpasteurized soft cheese, and milk, uncooked eggs, caffeine,
                  alcohol. Do quit smoking as well.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwelve">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">Can I
                  exercise safely while pregnant?</button>
              </h2>
              <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">Exercising during pregnancy is safe for healthy women and can relieve some
                  of the discomforts of pregnancy. Exercises that are safe are swimming, walking, and yoga.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThirteen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">How to
                  relieve pregnancy symptoms such as nausea, vomiting, cramps, heartburn and hemorrhoids?</button>
              </h2>
              <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body"><strong>For nausea:</strong> get up slowly in the morning simply because
                  movements make you nauseous, eat frequent small meals during the day and take lots of fresh air as
                  well as drink lots of fluid.<br><br>
                  <strong>For leg cramps:</strong> exercise regularly, take calcium supplements. At night soak both legs
                  in warm water with salts and do leg massage with some ointments to improve the blood flow.<br><br>
                  <strong>For heartburn:</strong> avoid greasy, fatty, and spicy foods as well and drink lots of fluid.
                  Do avoid bending and lying down just after meals.<br><br>
                  <strong>For hemorrhoids:</strong> avoid standing and sitting too long, drink lots of fluid and consume
                  high fiber diet.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFourteen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">How much
                  weight should I gain during pregnancy?</button>
              </h2>
              <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">Well for the average woman should gain about 2-4 pounds during the first
                  trimester and 1 pound a week for the remainder of the pregnancy, if you are overweight before the
                  pregnancy you should gain about 15-25 pounds, if you were underweight prior to pregnancy you should
                  gain 28- 40 pounds and if you were normal weight before pregnancy you should gain about 25-36 pounds.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFifteen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">When should
                  I cal my doctor between regular prenatal visits?</button>
              </h2>
              <div id="collapseFifteen" class="accordion-collapse collapse" aria-labelledby="headingFifteen"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">When you are cramping a lot or having severe abdominal pain, a significant
                  reduction in baby movement, shortness of breath or difficulty breathing, bleeding, signs of premature
                  labor, pain or cramping in your limps, fainting spells or dizziness, severe diarrhea or vomiting,
                  fever over 100 Fahrenheit, blurred vision or spots in front of the eyes and swelling in limb and face.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingSixteen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">How to make
                  birth plan for labor and delivery?</button>
              </h2>
              <div id="collapseSixteen" class="accordion-collapse collapse" aria-labelledby="headingSixteen"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">A birth plan is a pretty straight forward statement as to how you want the
                  birth of your baby to go.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingSeventeen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                  How can I prepare to breastfeed my baby after birth?</button>
              </h2>
              <div id="collapseSeventeen" class="accordion-collapse collapse" aria-labelledby="headingSeventeen"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">Breastfeeding is beneficial for you and your baby. It helps to protect your
                  child against diseases in childhood and even in later life, breastfeeding is not for every woman
                  because its not always easy for every woman to do. You can contact the women breastfeeding health
                  helpline as well as other supporting consults in your area.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingEighteen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen">
                  What should I know about postpartum depression? </button>
              </h2>
              <div id="collapseEighteen" class="accordion-collapse collapse" aria-labelledby="headingEighteen"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">This condition is a very normal problem associated with pregnancies. It is
                  caused by fluctuating hormones in a woman’s body. This condition is common especially if you have more
                  than one child as well as if you are a first-time mother and you have to make the transition to
                  parenthood. If you have major stresses in your life this can cause depression, symptoms can be crying,
                  feeling helpless, and withdrawing from your child and other people. If your feelings become severe,
                  seek help immediately.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingNineteen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">
                  Will sleeping on my back during pregnancy harm my baby? </button>
              </h2>
              <div id="collapseNineteen" class="accordion-collapse collapse" aria-labelledby="headingNineteen"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">Your sleeping position does not have any effect on the fetus in your womb.
                  However, in cases where the fetus is not growing properly, the mother can facilitate improved blood
                  flow to her baby by sleeping on her left side. If a mother is experiencing aortocaval compression
                  syndrome especially in the advanced pregnancy stage, it is best she sleeps on her side. Sleeping on
                  her side will help to ease her breathing and take the pressure off her.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwenty">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                  Can I travel during my pregnancy?</button>
              </h2>
              <div id="collapseTwenty" class="accordion-collapse collapse" aria-labelledby="headingTwenty"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">Travel is not advised against in low-risk pregnant women. However, one
                  should always check with their health care provider prior to airline travel, as well as with the
                  airline carrier whose restrictions may vary. If one does travel, it is important to remain hydrated
                  and to walk around the aircraft when possible, or stop and walk often when driving to decrease the
                  risk of blood clots.</div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
