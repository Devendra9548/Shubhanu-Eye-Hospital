@extends('templates.front.main')
@section('metainfo')
<title>Shubhanu Eye Hospital, Haldwani | Uttarakhand</title>
<meta name="description" content="Shubhanu Eye Hospital is the leading eye hospital in Haldwani. We offer excellent and affordable treatment for various eye problems.">
<meta name="keywords" content="Shubhanu Eye Hospital, eye hospital in Haldwani, eye specialist in Haldwani, eye care hospital, cataract surgery, LASIK surgery in Haldwani, retina specialist, glaucoma treatment, glaucoma surgery, refractive eye surgery, Implantable Collamer Lens (ICL), cornea transplant, oculoplasty, pediatric ophthalmology, dry eye treatment, retinal laser photocoagulation, retina injection therapy, glaucoma shunt surgery, Contoura LASIK, robotic cataract surgery">
<meta name="author" content="Shubhanu Eye Hospital">
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Shubhanu Eye Hospital, Haldwani | Uttarakhand" />
<meta property="og:description" content="Shubhanu Eye Hospital is the leading eye hospital in Haldwani. We offer excellent and affordable treatment for various eye problems." />
<meta property="og:url" content="https://shubhanueyehospital.com" />
<meta property="og:site_name" content="Shubhanu Eye Hospital" />
<meta property="og:image" content="https://shubhanueyehospital.com/assets/front/imgs/banners/1.webp" />
<meta property="og:image:width" content="1280" />
<meta property="og:image:height" content="720" />
<meta property="og:image:type" content="image/webp" />
<link rel="canonical" href="https://shubhanueyehospital.com" />
<link rel="preload" as="image" href="/assets/logo-icon.png" fetchpriority="high">
@endsection
@section('customcss')
<link rel="stylesheet" href="/assets/front/css/home.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
{{-- FIX: yahan se slick.min.js (jsdelivr) hata diya, kyunki wo jQuery se pehle load ho raha tha. Neeche jQuery ke baad slick load hota hai. --}}
<style>

    html.sp-lock,
    html.sp-lock body {
      overflow: hidden !important;
    }

    #sp,
    #sp * {
      box-sizing: border-box;
    }

    #sp {
      --sp-bg: #ffffff;
      position: fixed !important;
      top: 0 !important;
      left: 0 !important;
      right: 0 !important;
      bottom: 0 !important;
      width: 100% !important;
      height: 100% !important;
      margin: 0 !important;
      padding: 0 !important;
      z-index: 2147483000 !important;
      overflow: hidden !important;
      background: transparent;
      /* FIX: failsafe ab MAX_MS (8s) se bada hai */
      animation: sp-failsafe 0s linear 9.5s forwards;
    }

    #sp.sp-out {
      pointer-events: none;
    }

    #sp .sp-lid {
      position: absolute !important;
      left: -5% !important;
      width: 110% !important;
      height: 75% !important;
      margin: 0 !important;
      padding: 0 !important;
      background: var(--sp-bg) !important;
      transition: transform .7s cubic-bezier(.7, 0, .2, 1);
    }

    #sp .sp-lt {
      top: 0 !important;
      border-radius: 0 0 50% 50% / 0 0 30% 30%;
    }

    #sp .sp-lb {
      bottom: 0 !important;
      border-radius: 50% 50% 0 0 / 30% 30% 0 0;
    }

    #sp svg {
      position: absolute !important;
      left: 50% !important;
      top: 50% !important;
      width: min(44vw, 240px) !important;
      max-width: none !important;
      height: auto !important;
      margin: 0 !important;
      padding: 0 !important;
      display: block;
      transform: translate(-50%, -50%);
      overflow: visible;
      transition: transform .45s ease-in, opacity .35s ease-in;
    }

    #sp .sp-d {
      fill: none;
      stroke: #fff;
      stroke-dasharray: 1 1;
      stroke-dashoffset: 1;
      animation: sp-draw .7s cubic-bezier(.65, 0, .35, 1) forwards;
    }

    #sp .sp-d-s {
      animation-delay: .1s;
    }

    #sp .sp-d-lidT,
    #sp .sp-d-lidB {
      animation-delay: .55s;
      animation-duration: .65s;
    }

    #sp .sp-d-arcT,
    #sp .sp-d-arcB {
      animation-delay: .95s;
      animation-duration: .45s;
    }

    #sp .sp-ray {
      opacity: 0;
      transform-box: view-box;
      transform-origin: 50% 50%;
      transform: scale(.72);
      animation: sp-ray .42s cubic-bezier(.3, 1.5, .5, 1) forwards, sp-glow 1.6s ease-in-out infinite;
    }

    #sp .sp-r1 { --d: 1.2s; }
    #sp .sp-r2 { --d: 1.26s; }
    #sp .sp-r3 { --d: 1.32s; }
    #sp .sp-r4 { --d: 1.38s; }
    #sp .sp-r5 { --d: 1.44s; }
    #sp .sp-r6 { --d: 1.5s; }

    #sp .sp-ray {
      animation-delay: var(--d), calc(var(--d) + .8s);
    }

    #sp.sp-out svg {
      transform: translate(-50%, -50%) scale(1.1);
      opacity: 0;
    }

    #sp.sp-out .sp-lt {
      transform: translateY(-102%);
      transition-delay: .18s;
    }

    #sp.sp-out .sp-lb {
      transform: translateY(102%);
      transition-delay: .18s;
    }

    @keyframes sp-draw {
      to { stroke-dashoffset: 0; }
    }

    @keyframes sp-ray {
      to { opacity: 1; transform: scale(1); }
    }

    @keyframes sp-glow {
      50% { opacity: .45; }
    }

    @keyframes sp-failsafe {
      to { visibility: hidden; }
    }

    @media (prefers-reduced-motion: reduce) {
      #sp * {
        animation: none !important;
        transition: none !important;
      }
      #sp .sp-d { stroke-dashoffset: 0; }
      #sp .sp-ray { opacity: 1; transform: none; }
    }

    /* ---------- SHUBHANU PRELOADER CSS END ---------- */
  </style>
@endsection
@section('body')

<div id="sp" aria-hidden="true">
    <div class="sp-lid sp-lt"></div>
    <div class="sp-lid sp-lb"></div>
    <svg viewBox="0 0 979 875" xmlns="http://www.w3.org/2000/svg">
      <defs>
        <mask id="sp-m-s" maskUnits="userSpaceOnUse" x="-60" y="-60" width="1100" height="1000">
          <path class="sp-d sp-d-s"
            d="M514 176L484 179L469 180L449 183L429 188L409 195L389 205L369 219L350 237L337 257L328 277L325 297L325 317L328 337L336 357L349 377L367 395L387 409L407 418L427 425L447 429L467 432L487 434L507 435L527 438L547 443L567 450L587 461L607 476L625 494L637 514L645 534L648 554L648 574L644 594L635 614L622 634L603 652L583 665L563 675L543 682L523 687L503 690L487 692L481 693L451 697"
            pathLength="1" stroke-width="84" />
        </mask>
        <mask id="sp-m-lidT" maskUnits="userSpaceOnUse" x="-60" y="-60" width="1100" height="1000">
          <path class="sp-d sp-d-lidT"
            d="M508 187L540 187L549 187L562 188L575 190L589 193L602 197L615 202L629 206L642 212L655 218L669 225L682 232L695 240L709 249L722 259L735 270L749 281L762 291L775 302L789 312L802 323L815 333L829 344L842 355L855 365L869 376L882 387L895 398L908 409L919 421L924 434L924 447L917 460L906 472L893 482L879 493L866 503L853 514L839 524L826 535L813 546L800 556L790 564L783 569L758 589"
            pathLength="1" stroke-width="90" />
        </mask>
        <mask id="sp-m-lidB" maskUnits="userSpaceOnUse" x="-60" y="-60" width="1100" height="1000">
          <path class="sp-d sp-d-lidB"
            d="M454 699L424 691L415 688L402 685L389 682L375 679L362 675L349 670L335 665L322 658L309 652L295 644L282 636L269 627L255 617L242 607L229 596L215 585L202 575L189 564L175 553L162 542L149 532L135 521L122 511L109 501L95 490L82 480L69 468L59 456L53 443L54 430L62 417L73 406L86 395L99 385L113 374L126 363L139 353L153 342L166 331L179 321L189 313L195 309L221 290"
            pathLength="1" stroke-width="87" />
        </mask>
        <mask id="sp-m-arcT" maskUnits="userSpaceOnUse" x="-60" y="-60" width="1100" height="1000">
          <path class="sp-d sp-d-arcT"
            d="M432 289L464 287L468 287L471 287L476 287L481 287L486 287L491 287L497 287L502 287L507 288L513 288L518 289L523 289L529 290L534 291L539 292L545 294L550 295L555 297L561 298L566 300L571 302L577 304L582 306L587 309L593 312L598 315L603 318L609 321L614 325L619 329L625 334L630 339L635 344L640 349L644 354L648 359L652 365L656 370L659 375L662 381L664 386L666 391L668 397L670 402L671 407L673 412L674 416L675 419L677 426L686 457"
            pathLength="1" stroke-width="89" />
        </mask>
        <mask id="sp-m-arcB" maskUnits="userSpaceOnUse" x="-60" y="-60" width="1100" height="1000">
          <path class="sp-d sp-d-arcB"
            d="M514 593L484 589L480 589L477 589L472 588L467 587L462 587L457 586L451 585L446 585L441 584L435 583L430 581L425 580L419 578L414 577L409 575L403 573L398 571L393 569L387 566L382 563L377 561L371 557L366 554L361 550L355 546L350 542L345 538L340 533L335 528L331 523L326 518L322 513L319 507L315 502L312 497L310 491L307 486L305 481L303 475L301 470L299 465L298 461L297 457L294 450L283 421"
            pathLength="1" stroke-width="85" />
        </mask>
      </defs>
      <g fill="#959799">
        <path class="sp-ray sp-r1"
          d="M486.8 116.1C480.3 115.3 478.5 114.7 474.9 112.4C469.9 109.1 466.6 104.8 465.1 99.7C464.2 96.4 464.2 26.1 465.1 22.5C466.5 16.9 469.4 12.9 473.7 10.7C476.8 9.1 478.7 7.7 479.1 6.8C479.7 5.4 495.9 5.6 496.7 7.0C497.0 7.5 498.4 8.7 499.8 9.6C504.2 12.6 507.6 16.7 510.1 22.0C511.2 24.3 512.0 92.8 511.0 98.3C509.2 108.2 496.7 117.4 486.8 116.1Z" />
        <path class="sp-ray sp-r2"
          d="M749.8 214.5C738.3 212.3 732.6 206.2 731.3 194.7C730.1 184.5 730.6 183.9 762.7 156.6C773.6 147.4 783.7 138.7 785.2 137.3C796.3 127.2 806.0 123.2 815.5 124.8C832.0 127.6 838.8 144.3 828.9 157.5C826.9 160.2 824.4 162.5 803.0 180.8C793.0 189.4 782.6 198.5 779.9 201.1C767.6 212.8 759.5 216.4 749.8 214.5Z" />
        <path class="sp-ray sp-r3"
          d="M805.5 750.1C805.1 750.1 804.0 749.8 803.0 749.6C798.2 748.7 793.0 745.0 781.1 734.4C778.0 731.6 771.3 725.9 766.3 721.6C736.5 696.6 732.7 692.4 731.5 683.9C731.2 682.1 730.7 679.7 730.5 678.6C728.1 669.5 741.2 659.0 753.8 659.8C762.1 660.3 767.6 663.3 780.2 674.3C782.2 676.1 790.7 683.4 799.2 690.5C831.0 717.5 831.0 717.5 832.0 725.2C833.8 739.6 819.6 752.9 805.5 750.1Z" />
        <path class="sp-ray sp-r4"
          d="M478.7 868.6C478.7 868.0 477.2 866.7 474.5 864.9C464.3 858.3 464.0 856.2 464.0 809.2C464.0 795.8 463.9 783.3 463.9 781.3C463.6 757.7 497.4 750.7 508.1 772.2C510.7 777.3 510.5 774.3 510.5 814.5C510.5 855.7 510.8 852.2 507.0 857.9C504.7 861.4 502.8 863.4 499.5 865.7C497.9 866.8 496.9 867.7 496.8 868.2C496.6 869.2 478.7 869.5 478.7 868.6Z" />
        <path class="sp-ray sp-r5"
          d="M162.8 750.2C161.5 749.8 159.2 749.0 157.6 748.5C141.6 743.5 136.1 725.9 147.2 714.6C149.1 712.6 164.4 699.7 172.3 693.4C175.3 691.0 183.5 684.1 190.4 678.1C206.6 664.1 209.6 662.1 216.5 660.5C234.1 656.4 250.4 673.8 243.2 688.9C241.6 692.2 240.0 693.8 229.7 702.6C224.7 707.0 219.9 711.1 219.0 711.8C202.8 725.8 187.5 739.1 185.0 741.5C176.4 749.6 169.3 752.4 162.8 750.2Z" />
        <path class="sp-ray sp-r6"
          d="M217.1 215.0C214.2 214.5 210.2 213.1 208.5 212.0C202.2 208.0 151.8 164.6 145.6 157.9C131.9 143.0 149.2 119.7 169.8 125.2C176.1 126.8 176.0 126.7 206.1 152.7C219.6 164.3 232.3 175.1 234.3 176.6C245.4 185.1 246.9 191.4 240.7 203.5C236.5 211.8 226.5 216.7 217.1 215.0Z" />
        <path mask="url(#sp-m-arcT)"
          d="M672.3 458.8C664.4 457.3 657.4 453.0 654.3 447.7C651.8 443.3 651.4 441.7 650.2 429.8C647.6 405.7 640.5 387.2 627.5 371.3C626.4 370.0 624.1 367.1 622.5 365.0C616.4 357.1 614.1 354.9 601.4 345.1C587.1 333.9 573.2 326.2 558.7 321.2C556.0 320.3 514.9 310.6 511.3 310.0C508.6 309.6 492.3 309.6 490.3 310.0C489.5 310.2 485.7 310.5 481.8 310.7C478.0 310.9 473.6 311.1 472.1 311.3C464.7 311.9 455.7 310.9 451.5 309.0C435.0 301.5 431.8 281.8 445.3 270.8C450.7 266.3 456.8 264.8 471.2 264.3C475.9 264.2 481.0 263.9 482.3 263.7C483.9 263.5 485.7 263.5 487.2 263.7C488.4 263.9 494.4 264.1 500.3 264.3C511.3 264.6 518.0 265.2 525.0 266.3C527.1 266.7 530.0 267.1 531.3 267.2C538.8 267.9 566.5 275.5 582.5 281.4C593.2 285.3 620.3 299.5 629.7 306.1C652.7 322.3 673.6 345.1 685.6 367.0C693.1 380.6 695.6 387.6 702.0 412.5C704.1 420.7 705.2 434.2 704.2 439.1C701.5 452.2 686.4 461.5 672.3 458.8Z" />
        <path mask="url(#sp-m-arcB)"
          d="M472.8 611.8C447.0 609.6 440.6 608.7 426.9 605.2C422.3 604.0 417.4 602.8 416.0 602.5C407.9 600.8 392.3 594.9 376.5 587.6C363.7 581.7 342.4 567.6 329.0 556.1C327.1 554.5 324.5 552.4 323.4 551.5C315.6 545.6 298.0 523.5 290.1 509.7C280.5 493.0 273.7 471.8 271.7 452.2C271.1 446.0 271.0 445.9 269.8 444.1C267.8 441.0 268.0 438.8 270.7 434.6C280.0 420.3 303.6 418.7 316.5 431.5C319.9 435.0 320.6 436.9 323.0 450.5C325.3 463.8 326.1 467.1 328.9 474.5C332.8 485.0 340.6 498.8 346.5 505.8C347.8 507.3 350.2 510.2 351.9 512.4C361.9 524.8 386.1 542.6 401.2 548.5C403.4 549.4 406.4 550.7 407.8 551.4C425.9 560.5 459.1 567.3 485.2 567.3C500.5 567.4 510.2 573.4 513.4 584.9C516.2 595.1 509.0 607.3 498.3 610.5C493.9 611.8 480.9 612.5 472.8 611.8Z" />
      </g>
      <g fill="#25708D">
        <path mask="url(#sp-m-s)"
          d="M483.7 713.1C483.2 713.1 481.7 712.8 480.3 712.6C456.0 709.1 452.1 681.5 474.9 673.6C479.1 672.2 481.2 671.9 491.5 671.7C515.0 671.0 532.4 667.5 554.7 658.8C565.6 654.6 577.6 647.4 592.2 636.5C611.9 621.8 627.3 590.5 627.3 565.6C627.3 550.6 627.0 548.9 621.1 533.3C614.0 514.5 611.7 510.8 598.8 497.7C584.6 483.2 577.9 478.9 551.3 466.8C544.9 463.9 528.9 459.1 522.6 458.2C520.7 457.9 516.0 457.1 512.2 456.5C502.7 454.9 499.1 454.7 490.2 454.9C484.4 455.0 481.3 455.0 477.5 454.6C474.8 454.3 470.1 453.9 467.2 453.8C464.2 453.7 460.2 453.5 458.2 453.3C456.1 453.1 452.6 452.9 450.3 452.7C435.6 451.5 409.0 444.0 390.0 435.7C385.7 433.8 371.3 426.4 367.0 423.8C357.1 418.0 339.1 403.2 332.4 395.4C315.9 376.3 309.7 365.2 304.4 345.1C301.0 332.4 299.8 326.2 299.0 316.0C298.8 313.6 298.4 311.4 298.0 310.2C297.1 307.7 297.1 303.8 297.8 297.6C298.7 290.4 299.3 287.6 303.6 271.5C308.5 253.1 319.8 234.8 337.8 216.4C340.0 214.1 352.0 204.3 359.3 198.8C364.7 194.6 392.7 178.9 398.8 176.5C400.8 175.7 404.1 174.4 406.0 173.6C412.6 170.8 422.0 167.8 428.5 166.3C436.0 164.6 459.5 160.6 463.5 160.3C465.9 160.2 470.1 159.8 472.8 159.5C498.1 157.0 511.3 164.1 511.3 180.2C511.3 187.3 509.2 191.2 502.9 195.3C496.2 199.7 493.8 200.3 480.8 200.7C474.2 200.8 469.4 201.1 467.5 201.5C465.8 201.7 462.1 202.2 459.2 202.5C450.7 203.4 448.8 203.8 432.3 208.7C404.3 217.0 378.0 235.8 363.2 258.0C339.2 294.0 343.8 340.7 374.3 371.4C397.6 394.8 424.1 406.9 463.8 412.2C478.5 414.1 480.9 414.3 490.0 414.3C497.7 414.3 504.7 414.7 515.7 415.7C522.4 416.3 528.9 417.3 537.5 419.2C552.3 422.5 553.7 422.9 567.2 427.8C571.0 429.3 575.5 430.8 577.2 431.4C598.7 438.1 631.0 461.7 646.2 481.7C665.1 506.5 674.4 528.6 676.0 552.5C676.7 563.0 676.7 563.4 676.2 567.2C675.9 569.2 675.4 573.2 675.2 576.2C673.7 590.8 670.0 604.6 664.8 614.2C662.2 619.1 655.6 630.1 652.9 634.1C647.1 642.8 626.1 663.7 616.0 670.8C604.3 679.2 602.5 680.4 600.1 681.8C596.9 683.7 556.1 701.6 550.5 703.5C543.9 705.9 520.6 710.6 513.6 711.0C510.8 711.2 505.8 711.7 502.6 712.2C497.2 713.0 486.0 713.6 483.7 713.1Z" />
        <path mask="url(#sp-m-lidT)"
          d="M778.8 591.1C764.1 588.7 754.3 575.6 759.3 564.8C762.1 558.8 766.5 554.5 780.0 544.8C790.2 537.4 810.2 521.9 820.0 513.6C823.6 510.6 831.1 504.6 836.7 500.2C842.3 495.8 850.1 489.6 854.2 486.4C858.2 483.2 866.6 476.6 872.8 471.7C879.1 466.9 888.7 459.1 894.3 454.5C899.9 449.9 905.6 445.3 906.9 444.4C913.6 439.5 913.8 439.8 880.0 413.5C867.4 403.6 850.5 390.2 842.7 383.8C839.3 381.1 830.8 374.2 823.9 368.7C816.9 363.1 809.5 357.1 807.4 355.3C805.2 353.6 801.6 350.7 799.3 349.1C797.0 347.4 794.1 345.2 792.8 344.1C787.8 339.9 777.9 331.9 772.1 327.4C768.8 324.8 764.1 321.1 761.7 319.0C759.2 317.0 754.5 313.2 751.1 310.6C736.7 299.6 731.5 295.6 724.8 290.2C718.1 284.7 697.3 268.1 693.2 265.0C676.2 252.0 643.7 234.1 624.5 227.3C576.5 210.1 571.1 208.6 538.2 204.2C518.0 201.4 518.6 201.9 522.5 193.7C523.8 191.0 524.9 187.9 525.4 186.2C525.8 184.5 526.5 182.3 527.0 181.3C528.7 177.9 528.7 176.9 526.2 170.3C523.5 163.2 525.0 162.1 534.8 163.7C536.1 163.9 539.1 164.2 541.5 164.3C544.0 164.5 546.8 164.9 547.9 165.2C549.1 165.4 552.0 166.0 554.4 166.4C574.7 169.5 627.7 183.5 641.7 189.5C643.6 190.3 647.9 192.1 651.2 193.4C683.0 206.7 721.5 228.8 735.7 241.9C737.0 243.2 751.1 254.4 766.8 266.8C782.6 279.3 807.4 299.0 822.0 310.7C836.6 322.3 851.0 333.7 854.0 336.0C860.9 341.2 891.5 365.8 894.3 368.4C895.4 369.5 898.4 371.8 900.8 373.7C905.3 377.0 906.4 377.9 913.0 383.9C919.9 389.9 930.8 398.7 934.7 401.2C936.8 402.6 941.3 406.0 944.7 408.7C948.1 411.4 952.5 414.7 954.5 416.2C973.2 429.4 977.2 439.8 967.9 451.0C965.6 453.7 893.2 511.7 867.2 531.6C864.4 533.7 858.8 538.2 854.7 541.5C850.5 544.8 845.3 549.0 843.0 550.7C840.7 552.5 829.5 561.4 818.2 570.5C796.0 588.2 794.7 589.1 789.3 590.5C787.2 591.0 780.7 591.4 778.8 591.1Z" />
        <path mask="url(#sp-m-lidB)"
          d="M440.0 713.3C438.8 713.1 433.0 712.4 427.2 711.6C421.3 710.9 415.4 710.1 414.0 709.8C408.8 708.7 372.3 699.9 368.7 698.8C366.6 698.2 362.2 696.9 359.0 696.0C342.4 691.3 333.1 687.5 310.0 676.1C273.8 658.1 260.7 649.9 234.5 629.0C230.5 625.8 221.6 618.7 214.7 613.4C207.9 608.0 200.3 601.9 197.9 599.8C192.5 595.0 186.1 589.9 182.3 587.3C180.8 586.3 178.5 584.5 177.2 583.4C176.0 582.2 171.7 578.7 167.7 575.5C163.8 572.3 158.3 567.8 155.7 565.5C148.5 559.2 112.0 530.1 105.4 525.4C98.9 520.7 90.3 514.1 80.2 505.8C66.7 494.9 30.8 466.4 24.0 461.3C16.4 455.6 12.5 452.1 9.6 448.3C8.4 446.7 7.3 445.6 6.8 445.5C5.5 445.1 5.5 436.9 6.8 436.5C7.4 436.4 8.2 435.3 9.7 432.9C12.8 427.9 15.0 425.9 35.8 409.1C56.0 393.0 56.6 392.4 73.3 379.5C83.2 371.8 133.7 331.4 143.5 323.3C145.5 321.6 153.1 315.5 160.3 309.7C167.6 303.9 175.7 297.3 178.3 295.2C186.7 288.5 191.3 287.2 201.0 289.2C215.5 292.2 224.4 305.1 219.2 315.8C217.6 319.2 216.3 320.5 208.2 326.8C204.2 329.9 196.7 335.8 191.7 339.8C186.6 343.9 180.8 348.5 178.8 350.0C176.8 351.6 172.4 355.3 169.0 358.2C161.5 364.6 158.1 367.3 152.7 371.2C150.4 372.8 144.7 377.2 140.0 381.0C126.0 392.2 92.3 418.8 85.3 424.2C66.2 438.8 65.8 439.3 70.7 443.4C76.2 448.0 138.9 497.3 146.7 503.0C151.7 506.7 162.9 515.5 171.6 522.5C180.3 529.5 190.8 537.8 195.0 541.0C199.1 544.2 204.8 548.7 207.7 551.0C210.5 553.3 223.6 563.9 236.8 574.5C250.0 585.1 263.2 595.7 266.1 598.1C274.3 604.7 303.6 626.1 308.2 628.9C314.5 632.6 349.3 649.9 355.3 652.2C371.6 658.6 381.0 661.2 411.7 667.5C445.8 674.5 442.8 674.0 446.4 674.3C451.5 674.8 452.0 675.8 449.5 680.9C445.1 690.0 444.6 698.0 448.0 706.9C450.5 713.6 449.3 714.5 440.0 713.3Z" />
      </g>
    </svg>
</div>

{{-- FIX: Naya preloader script - div ke turant baad. sessionStorage hata diya, ab har load par dikhega. --}}
<script>
(function () {
  var MIN_MS = 1600;   // kam se kam itni der dikhega (animation poori hone ke liye)
  var MAX_MS = 8000;   // isse zyada kabhi nahi rukega
  var el = document.getElementById('sp');
  if (!el) return;

  var root = document.documentElement;
  var done = false;
  var t0 = Date.now();

  root.classList.add('sp-lock');

  function removeEl() {
    if (el && el.parentNode) el.parentNode.removeChild(el);
  }

  function finish() {
    if (done) return;
    done = true;
    el.classList.add('sp-out');
    root.classList.remove('sp-lock');
    setTimeout(removeEl, 1000);
  }

  function ready() {
    var wait = Math.max(0, MIN_MS - (Date.now() - t0));
    setTimeout(finish, wait);
  }

  if (document.readyState === 'complete') ready();
  else window.addEventListener('load', ready);

  setTimeout(finish, MAX_MS);

  // Back/forward button (bfcache) se aane par preloader atak na jaye
  window.addEventListener('pageshow', function (e) {
    if (e.persisted) {
      done = true;
      root.classList.remove('sp-lock');
      removeEl();
    }
  });
})();
</script>


<section class="first-hero-section">
    <picture class="showBookAppointment">
        <source media="(max-width: 767px)" srcset="/assets/front/imgs/banners/1-mb.webp">
        <source media="(min-width: 768px)" srcset="/assets/front/imgs/banners/1.webp">
        <img src="/assets/front/imgs/banners/1.webp" alt="Banner" width="100%">
    </picture>
    <picture class="showBookAppointment">
        <source media="(max-width: 767px)" srcset="/assets/front/imgs/banners/2-mb.webp">
        <source media="(min-width: 768px)" srcset="/assets/front/imgs/banners/2.webp">
        <img src="/assets/front/imgs/banners/2.webp" alt="Banner" width="100%">
    </picture>
    <picture class="showBookAppointment">
        <source media="(max-width: 767px)" srcset="/assets/front/imgs/banners/3-mb.webp">
        <source media="(min-width: 768px)" srcset="/assets/front/imgs/banners/3.webp">
        <img src="/assets/front/imgs/banners/3.webp" alt="Banner" width="100%">
    </picture>
</section>

<section class="info-cta-section bg-yellow">
    <div class="container bg-blue">
        <div class="d-flex justify-content-start">
            <div class="left-clm">
                <div class="dicon">+</div>
                <div class="number">20</div>
                <div class="text">Years of Experience</div>
            </div>
            <div class="right-clm">
                <h1 class="title">Stronger <span>- A Legacy of Better Vision</span></h1>
                <p class="desc">Years of experience. Thousands of lives touched.</p>
                <div class="d-flex inner-row mt-3">
                    <div class="inner-clm">
                        <p class="inner-number">50+</p>
                        <p class="inner-desc">Eye Care Professionals</p>
                    </div>
                    <div class="inner-clm">
                        <p class="inner-number">1,00,000+</p>
                        <p class="inner-desc">Patients <br>Treated</p>
                    </div>
                    <div class="inner-clm">
                        <p class="inner-number">50,000+</p>
                        <p class="inner-desc">Successful Procedures & Surgeries</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$services=[
    [
        "img" => "/assets/front/imgs/1/4.webp",
        "title" => "Specialized Care",
        "name" => "Retina & Vitreous Care",
        "para" => "Advanced diagnosis and treatment for retinal and vitreous disorders.",
        "points" => ["Retina Surgery", "Laser Treatment", "Intravitreal Injections"]
    ],
    [
        "img" => "/assets/front/imgs/1/6.webp",
        "title" => "Specialized Care",
        "name" => "Orbit & Oculoplasty",
        "para" => "Specialized care for eyelid, tear duct and orbital conditions.",
        "points" => ["Eyelid Surgery", "Watering Eye Treatment", "Orbital Surgery"]
    ],
    [
        "img" => "/assets/front/imgs/1/7.webp",
        "title" => "Specialized Care",
        "name" => "Cornea Care",
        "para" => "Specialized diagnosis and treatment for corneal diseases and disorders.",
        "points" => ["Corneal Disorders", "Keratoconus & C3R", "Corneal Surgery"]
    ],
    [
        "img" => "/assets/front/imgs/1/glaucoma-care.jpeg",
        "title" => "Specialized Care",
        "name" => "Glaucoma Care",
        "para" => "Comprehensive care to detect and manage glaucoma at every stage.",
        "points" => ["Glaucoma Diagnosis", "Laser Treatment", "Glaucoma Surgery"]
    ],
    [
        "img" => "/assets/front/imgs/1/8.webp",
        "title" => "Specialized Care",
        "name" => "Squint Care",
        "para" => "Expert evaluation and treatment for eye alignment problems in children and adults.",
        "points" => ["Squint Evaluation", "Amblyopia Management", "Squint Surgery"]
    ],
    [
        "img" => "/assets/front/imgs/1/9.webp",
        "title" => "Specialized Care",
        "name" => "Eye Trauma & Emergency",
        "para" => "Prompt and specialized care for urgent eye conditions and injuries.",
        "points" => ["Eye Injuries", "Foreign Body & Chemical Injuries", "Emergency Eye Surgery"]
    ],
    [
        "img" => "/assets/front/imgs/1/5.webp",
        "title" => "Specialized Care",
        "name" => "Cataract & Lens Surgery",
        "para" => "Advanced cataract treatment for clear and better-quality vision.",
        "points" => ["AI-Guided Cataract Surgery", "Premium IOLs", "MICS / Phaco Surgery"]
    ],
];
?>

<section class="nxsvc-section">
    <div class="container">
        <div class="nxsvc-heading mb-4">
            <div class="nxsvc-heading-left text-center">
                <h2 data-animate="fade-left" data-delay="2">Our Services</h2>
            </div>
        </div>
        <div class="nxsvc-grid slider">
            @foreach($services as $service)
            <article class="nxsvc-card">
                <div class="nxsvc-image">
                    <img src="{{$service['img']}}" alt="Orbit & Oculoplasty">
                    <div class="nxsvc-image-overlay"></div>
                    <span class="nxsvc-number">0{{ $loop->iteration }}</span>
                    <a href="javascript:void(0)" class="nxsvc-arrow">
                        <i class="fas fa-arrow-up-right-from-square"></i>
                    </a>
                </div>
                <div class="nxsvc-content">
                    <span class="nxsvc-tag">{{$service['title']}}</span>
                    <h3>{{$service['name']}}</h3>
                    <p class="mb-3">{{$service['para']}}</p>
                    @foreach($service['points'] as $point)
                    <p class="highlight">{{ $point }}</p>
                    @endforeach
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>


<section class="eye-about py-5">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4" data-animate="fade-left" data-delay="2">Vision & Mission</h2>
                <p class="" data-animate="fade-left" data-delay="4">Advanced eye care with a human touch.</p>
                <p class="lastline" data-animate="fade-left" data-delay="6">Preserving sight. Improving lives.</p>
            </div>

            <div class="col-lg-6 mb-ct-center">
                <a href="{{route('about')}}">
                    <div class="eye-icon">
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="ct-doctor-section mt-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <h2 class="eqshow-title text-center text-md-start">Doctors in the Spotlight</h2>
            </div>
            <div class="col-12 col-md-4 text-end d-md-flex align-items-center justify-content-end view-all-doctors">
                <a href="javascript:void(0)" class="globalbtn">View All Doctors</a>
            </div>
        </div>

        <div class="row ct-main-doctor-card ct-box-shadow">
            <div class="col-12 col-md-6 d-flex align-items-end justify-content-center">
                <img src="/assets/front/imgs/doctors/dr-bhanu-pratap-singh-pangtey.webp" alt="Dr. Bhanu Pratap Singh"
                    width="100%">
                <p class="title">Chairman</p>
            </div>
            <div class="col-12 col-md-6 inner-clms py-5 pe-3">
                <div class="top-clms">
                    <span class="awards">MS Ophthalmology | FICO | Vitreo-Retina Fellowship</span>
                    <h3>Dr. Bhanu Pratap Singh Pangtey</h3>
                    <p class="subtitle">15+ Years of Experience</p>
                    <p class="details"><strong>Specialisation:</strong> Experienced Vitreo-Retina Surgeon with expertise
                        in the
                        diagnosis and surgical management of complex retinal and
                        vitreous disorders.</p>
                </div>
                <div class="row g-3 mt-2 mt-md-5">
                    <div class="col-md-6">
                        <div class="info-box">
                            <div class="iconbox">
                                <i class="fa-solid fa-stethoscope"></i>
                            </div>
                            <div class="content">
                                <strong>Specialty</strong>
                                <span>Vitreo-Retina</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box">
                            <div class="iconbox">
                                <i class="fa-solid fa-calendar-check"></i>
                            </div>
                            <div class="content">
                                <strong>Availability</strong>
                                <span>Full-Time / Daily</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <a href="javascript:void(0)" class="appointment-btn showBookAppointment">Book Appointment</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row ct-main-doctor-card ct-box-shadow">
            <div class="col-12 col-md-6 d-flex align-items-end justify-content-center">
                <img src="/assets/front/imgs/doctors/dr-shubha-raguram-pangtey.webp" alt="Dr. Bhanu Pratap Singh"
                    width="100%">
                <p class="title">Chairman</p>
            </div>
            <div class="col-12 col-md-6 inner-clms py-5 pe-3">
                <div class="top-clms">
                    <span class="awards">MS Ophthalmology | Fellowship in Orbit | Oculoplasty & Ocular Oncology</span>
                    <h3>Dr. Shubha Raguram Pangtey</h3>
                    <p class="subtitle">15+ Years of Experience</p>
                    <p class="details"><strong>Specialisation:</strong> An experienced ophthalmic surgeon specializing
                        in Orbit, Oculoplasty, Ocular
                        Oncology, Neuro-Ophthalmology and Pediatric Eye Care, with expertise in managing
                        complex eyelid, lacrimal, orbital and ocular tumour conditions.</p>
                </div>
                <div class="row g-3 mt-2 mt-md-5">
                    <div class="col-md-6">
                        <div class="info-box">
                            <div class="iconbox">
                                <i class="fa-solid fa-stethoscope"></i>
                            </div>
                            <div class="content">
                                <strong>Specialty</strong>
                                <span>Orbit, Oculoplasty & Ocular Oncology</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box">
                            <div class="iconbox">
                                <i class="fa-solid fa-eye"></i>
                            </div>
                            <div class="content">
                                <strong>Additional Expertise</strong>
                                <span>Neuro-Ophthalmology & Pediatric Ophthalmology</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <a href="javascript:void(0)" class="appointment-btn showBookAppointment">Book Appointment</a>
                    </div>

                </div>
            </div>
        </div>

        <div class="row ct-main-doctor-card ct-other-doctor-card other-doctor-slider">
            <div class="col-12 col-md-4 ct-inner-doctor-card">
                <div class="img-clm">
                    <p class="title">Chairman</p>
                    <img src="/assets/front/imgs/doctors/dr-shagun-sood.webp" alt="Dr. Shagun Sood">
                </div>
                <div class="inner-content pb-4 px-3">
                    <span class="awards">MBBS | MS Ophthalmology | DNB | FICO</span>
                    <h3>Dr. Shagun Sood</h3>
                    <p class="subtitle">10+ Years of Experience</p>
                    <p class="details"><strong>Specialisation:</strong> Experienced ophthalmic surgeon with expertise in
                        cataract,
                        squint and refractive procedures, with extensive surgical
                        experience across adult and pediatric eye care.</p>
                    <a href="javascript:void(0)" class="appointment-btn">Know More</a>
                </div>
            </div>
            <div class="col-12 col-md-4 ct-inner-doctor-card">
                <div class="img-clm">
                    <p class="title">Chairman</p>
                    <img src="/assets/front/imgs/doctors/dr-mohd-sufyan-danish.webp" alt="Dr. Mohd Sufyan Danish">
                </div>
                <div class="inner-content pb-4 px-3">
                    <span class="awards">MBBS | DOMS | DNB Ophthalmology</span>
                    <h3>Dr. Mohd Sufyan Danish</h3>
                    <p class="subtitle">8+ Years of Experience</p>
                    <p class="details"><strong>Specialisation:</strong> Experienced ophthalmic surgeon specializing in
                        corneal
                        diseases, cataract and refractive surgery, with extensive
                        expertise in complex anterior segment procedures.</p>
                    <a href="javascript:void(0)" class="appointment-btn">Know More</a>
                </div>
            </div>
            <div class="col-12 col-md-4 ct-inner-doctor-card">
                <div class="img-clm">
                    <p class="title">Chairman</p>
                    <img src="/assets/front/imgs/doctors/dr-nabeel-firoz.webp" alt="Dr. Nabeel Firoz">
                </div>
                <div class="inner-content pb-4 px-3">
                    <span class="awards">MBBS | DOMS | DNB Ophthalmology</span>
                    <h3>Dr. Nabeel Firoz</h3>
                    <p class="subtitle">8 Years of Experience</p>
                    <p class="details"><strong>Specialisation:</strong> Experienced ophthalmologist with expertise in
                        cataract
                        surgery, medical retina and comprehensive eye care, with a
                        special focus on retinal injections and laser procedures.</p>
                    <a href="javascript:void(0)" class="appointment-btn">Know More</a>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="eqshow-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="eqshow-title">Our Advanced Equipment</h2>
                <p class="eqshow-desc m-auto">We use the latest ophthalmology technology to provide
                    accurate diagnosis and advanced treatment for every patient.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="eqshow-nav">
                    <button class="eqshow-item active" data-index="0">
                        <img src="/assets/front/imgs/equipment/10-mb.webp" alt="shubhanu eye hospital icon">
                        <span>Argos</span>
                    </button>
                    <button class="eqshow-item" data-index="1">
                        <img src="/assets/front/imgs/equipment/1-mb.webp" alt="shubhanu eye hospital icon">
                        <span>Lumera</span>
                    </button>
                    <button class="eqshow-item" data-index="2">
                        <img src="/assets/front/imgs/equipment/2-mb.webp" alt="shubhanu eye hospital icon">
                        <span>Lenstar</span>
                    </button>
                    <button class="eqshow-item" data-index="3">
                        <img src="/assets/front/imgs/equipment/3-mb.webp" alt="shubhanu eye hospital icon">
                        <span>Pentacam</span>
                    </button>
                    <button class="eqshow-item" data-index="4">
                        <img src="/assets/front/imgs/equipment/4-mb.webp" alt="shubhanu eye hospital icon">
                        <span>Centurion</span>
                    </button>
                    <button class="eqshow-item" data-index="5">
                        <img src="/assets/front/imgs/equipment/5-mb.webp" alt="shubhanu eye hospital icon">
                        <span>Constellation</span>
                    </button>
                    <button class="eqshow-item" data-index="6">
                        <img src="/assets/front/imgs/equipment/6-mb.webp" alt="shubhanu eye hospital icon">
                        <span>Legion</span>
                    </button>
                    <button class="eqshow-item" data-index="7">
                        <img src="/assets/front/imgs/equipment/7-mb.webp" alt="shubhanu eye hospital icon">
                        <span>Maestro</span>
                    </button>
                    <button class="eqshow-item" data-index="8">
                        <img src="/assets/front/imgs/equipment/8-mb.webp" alt="shubhanu eye hospital icon">
                        <span>Tomey</span>
                    </button>
                    <button class="eqshow-item" data-index="9">
                        <img src="/assets/front/imgs/equipment/9-mb.webp" alt="shubhanu eye hospital icon">
                        <span>Eidon</span>
                    </button>
                </div>

            </div>

        </div>
        <div class="row align-items-center mt-2 gy-5">
            <div class="col-lg-6">
                <div class="eqshow-image-area">
                    <span class="eqshow-glow"></span>
                    <img id="eqshowMainImage" src="/assets/front/imgs/equipment/10.webp" class="img-fluid"
                        alt="Equipment">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="eqshow-content">
                    <h3 id="eqshowTitle">Alcon ARGOS Biometer with Image Guidance</h3>
                    <p id="eqshowDescription">
                        A swept-source OCT biometry system designed for advanced cataract surgery planning and IOL power
                        calculation. It captures detailed biometric measurements along with a reference image of the eye
                        to support precise, image-guided surgical planning.
                    </p>
                    <div class="eqshow-features">
                        <div class="eqshow-feature">
                            <i class="fa-solid fa-circle-check"></i>
                            Swept-Source OCT biometry
                        </div>
                        <div class="eqshow-feature">
                            <i class="fa-solid fa-circle-check"></i>
                            Rapid biometric data acquisition

                        </div>

                        <div class="eqshow-feature">
                            <i class="fa-solid fa-circle-check"></i>
                            Segmented axial length measurement
                        </div>

                        <div class="eqshow-feature">
                            <i class="fa-solid fa-circle-check"></i>
                            Keratometry and anterior chamber measurements
                        </div>

                        <div class="eqshow-feature">
                            <i class="fa-solid fa-circle-check"></i>
                            Advanced IOL power calculation
                        </div>

                        <div class="eqshow-feature">
                            <i class="fa-solid fa-circle-check"></i>
                            Integrated Alcon Vision Planner
                        </div>

                        <div class="eqshow-feature">
                            <i class="fa-solid fa-circle-check"></i>
                            Image-guided astigmatism management
                        </div>
                        <div class="eqshow-feature">
                            <i class="fa-solid fa-circle-check"></i>
                            Digital transfer of surgical planning data to compatible OR systems
                        </div>

                    </div>
                </div>
            </div>
        </div>




    </div>

</section>

<?php 
$partners=[
    [
        "name" => "Bank Image",
        "img" => "/assets/front/imgs/partners/11.webp"
    ],
    [
        "name" => "Bank Image",
        "img" => "/assets/front/imgs/partners/12.webp"
    ],
    [
        "name" => "Bank Image",
        "img" => "/assets/front/imgs/partners/13.webp"
    ],
    [
        "name" => "Bank Image",
        "img" => "/assets/front/imgs/partners/14.webp"
    ],
    [
        "name" => "Bank Image",
        "img" => "/assets/front/imgs/partners/15.webp"
    ],
    [
        "name" => "Bank Image",
        "img" => "/assets/front/imgs/partners/16.webp"
    ],
    [
        "name" => "Bank Image",
        "img" => "/assets/front/imgs/partners/17.webp"
    ],
    [
        "name" => "Bank Image",
        "img" => "/assets/front/imgs/partners/18.webp"
    ],
    [
        "name" => "Bank Image",
        "img" => "/assets/front/imgs/partners/19.webp"
    ],
    [
        "name" => "Bank Image",
        "img" => "/assets/front/imgs/partners/20.webp"
    ],
    [
        "name" => "Bank Image",
        "img" => "/assets/front/imgs/partners/21.webp"
    ],
    [
        "name" => "Bank Image",
        "img" => "/assets/front/imgs/partners/22.webp"
    ],
    [
        "name" => "Bank Image",
        "img" => "/assets/front/imgs/partners/23.webp"
    ],
    [
        "name" => "Bank Image",
        "img" => "/assets/front/imgs/partners/24.webp"
    ],
    [
        "name" => "Bank Image",
        "img" => "/assets/front/imgs/partners/25.webp"
    ],
    [
        "name" => "Bank Image",
        "img" => "/assets/front/imgs/partners/26.webp"
    ],
    [
        "name" => "Bank Image",
        "img" => "/assets/front/imgs/partners/27.webp"
    ],
    [
        "name" => "Bank Image",
        "img" => "/assets/front/imgs/partners/28.webp"
    ],
    [
        "name" => "Bank Image",
        "img" => "/assets/front/imgs/partners/29.webp"
    ],
    [
        "name" => "Bank Image",
        "img" => "/assets/front/imgs/partners/30.webp"
    ],
    [
        "name" => "Bank Image",
        "img" => "/assets/front/imgs/partners/31.webp"
    ],
];
?>
<section class="mediclaim-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 position-relative z-2 mb-width">
                <h2 class="mediclaim-title">
                    Mediclaim & Cashless Services
                </h2>

                <p class="mediclaim-text">
                    Shubhanu Eye Hospital offers cashless mediclaim facilities for eligible patients through empanelled
                    TPAs, insurance companies and government health panels. These services help patients access quality
                    eye care and surgical treatment without the need to pay the entire eligible treatment cost upfront.
                    Our dedicated team assists patients with the cashless process, including insurance verification,
                    documentation, pre-authorisation and claim coordination with the concerned TPA or insurance
                    provider. Cashless approval and coverage depend on the terms and conditions of the patient’s policy
                    and the treatment covered under it.
                </p>
                <p class="mediclaim-note mt-3">
                    <strong>NOTE:</strong>
                    Prior approval/pre-authorisation from the concerned TPA or insurance company may be required before
                    availing cashless treatment. Patients are advised to confirm their policy coverage, eligibility,
                    exclusions and applicable terms before treatment.
                </p>
                <a href="javascript:void(0)" class="appointment-btn showBookAppointment">Apply Now</a>
            </div>
            <div class="col-md-6 mediclaim-image-wrap">
                <img src="/assets/front/imgs/left-cashless.webp" class="mediclaim-family"
                    alt="Mediclaim Cashless Services">
            </div>

        </div>
    </div>

    <div class="insurance-logo-area">
        <div class="insurance-track">
            @foreach($partners as $partner)
            <div class="insurance-logo">
                <img src="{{$partner['img']}}" alt="{{$partner['name']}}">
            </div>
            @endforeach
        </div>
    </div>
</section>

<?php 
$instagram=[
    [
        "img" => "/instagram/1.webp",
        "link" => "https://www.instagram.com/reel/Da4olhqJ734/",
    ],
    [
        "img" => "/instagram/2.webp",
        "link" => "https://www.instagram.com/reel/DMsKo72I_ZV/",
    ],
    [
        "img" => "/instagram/3.webp",
        "link" => "https://www.instagram.com/reel/DPA-Tu5DJTm/",
    ],
    [
        "img" => "/instagram/4.webp",
        "link" => "https://www.instagram.com/reel/DRPPSoQEXZd/",
    ],
    [
        "img" => "/instagram/5.webp",
        "link" => "https://www.instagram.com/reel/DSH7lPECS1J/",
    ],
    [
        "img" => "/instagram/6.webp",
        "link" => "https://www.instagram.com/reel/DSMuoUOEwxd/",
    ],
];
?>

<section class="our-services our-instagram-section pb-5">
    <div class="container">
        <div class="our-instagram-title-wrap">
            <h2 class="text-center">Instagram</h2>
        </div>
        <div class="row our-instagram-slider">
            @foreach($instagram as $instagram)
            <div class="our-instagram-slide">
                <div class="our-instagram-card">
                    <a href="{{$instagram['link']}}" target="_blank" rel="noopener noreferrer" class="our-instagram-image-wrap">
                        <img src="{{$instagram['img']}}" alt="Shubhanu Eye Hospital Instagram Reel" height="500" loading="lazy" decoding="async">
                        <span class="our-instagram-reel-icon"><i class="fas fa-play"></i></span>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<section class="mb-5 zbg-blog-section py-5">
    <div class="container py-5">

        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="zbg-blog-title">From Our Blog</h2>
            </div>
        </div>

        <div class="row g-5">
            <div class="mt-3 col-12 col-lg-6">
                <div class="zbg-blog-item">

                    <div class="zbg-blog-thumb">
                        <a href="javascript:void(0)">
                            <img src="https://images.unsplash.com/photo-1588776814546-daab30f310ce?w=800"
                                alt="shubhanu eye hospital icon">
                        </a>
                    </div>

                    <div class="zbg-blog-content">

                        <h3 class="zbg-blog-post-title">
                            <a href="javascript:void(0)">
                                Should You Be Worried About Microplastics in Your Food?
                            </a>
                        </h3>

                        <div class="zbg-blog-meta">
                            <span>John Doe</span>
                            <span class="zbg-blog-dot">•</span>
                            <span>10 Jan, 2019</span>
                        </div>

                        <p>
                            Plastic — it's in the air, sea and probably your body.
                            Find out what microplastics are doing to your health,
                            Find out what microplastics are doing to your health
                        </p>

                    </div>

                </div>
            </div>

            <div class="mt-md-3 col-12 col-lg-6">
                <div class="zbg-blog-item">

                    <div class="zbg-blog-thumb">
                        <a href="javascript:void(0)">
                            <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=800"
                                alt="shubhanu eye hospital icon">
                        </a>
                    </div>

                    <div class="zbg-blog-content">

                        <h3 class="zbg-blog-post-title">
                            <a href="javascript:void(0)">
                                What to Expect During and After a Breast Biopsy
                            </a>
                        </h3>

                        <div class="zbg-blog-meta">
                            <span>William Petro</span>
                            <span class="zbg-blog-dot">•</span>
                            <span>03 Feb, 2019</span>
                        </div>

                        <p>
                            We interview Dr Lim Siew Kuan to understand what to
                            expect before, during and after a breast biopsy,
                            expect before, during and after a breast biopsy.
                        </p>

                    </div>

                </div>
            </div>

            <!-- Blog Item -->
            <div class="col-lg-6">
                <div class="zbg-blog-item">

                    <div class="zbg-blog-thumb">
                        <a href="javascript:void(0)">
                            <img src="https://images.unsplash.com/photo-1516549655169-df83a0774514?w=800"
                                alt="shubhanu eye hospital icon">
                        </a>
                    </div>

                    <div class="zbg-blog-content">

                        <h3 class="zbg-blog-post-title">
                            <a href="javascript:void(0)">
                                How Heart Attack Signs Differ in Men & Women
                            </a>
                        </h3>

                        <div class="zbg-blog-meta">
                            <span>Sultan Sentu</span>
                            <span class="zbg-blog-dot">•</span>
                            <span>05 Mar, 2019</span>
                        </div>

                        <p>
                            Is there gender equality in heart attacks?
                            Here's what you need to know about the warning signs,
                            expect before, during and after a breast biopsy,
                        </p>

                    </div>

                </div>
            </div>

            <!-- Blog Item -->
            <div class="col-lg-6">
                <div class="zbg-blog-item">

                    <div class="zbg-blog-thumb">
                        <a href="javascript:void(0)">
                            <img src="https://images.unsplash.com/photo-1512678080530-7760d81faba6?w=800"
                                alt="shubhanu eye hospital icon">
                        </a>
                    </div>

                    <div class="zbg-blog-content">

                        <h3 class="zbg-blog-post-title">
                            <a href="javascript:void(0)">
                                Prenatal Infections and How to Avoid Them
                            </a>
                        </h3>

                        <div class="zbg-blog-meta">
                            <span>Marry Com</span>
                            <span class="zbg-blog-dot">•</span>
                            <span>29 Jun, 2019</span>
                        </div>

                        <p>
                            Prenatal infections can interfere with the health of
                            both you and your baby, so it's important to take
                            steps to prevent them,expect before, during and after a breast biopsy,
                        </p>

                    </div>

                </div>
            </div>

        </div>

    </div>
</section>

<?php 
$toptestimonials = [
    [
        "desc" => "My experience at Shubhanu Eye Hospital was excellent. Dr. Bhanu Pratap Singh Pangtey explained my treatment patiently and made me feel completely comfortable.",
        "name" => "Rakesh Joshi",
        "time" => "1 week ago",
        "img" => "/assets/front/imgs/male.webp"
    ],
    [
        "desc" => "Dr. Shubha Raguram Pangtey listened carefully to my concerns and explained every step clearly. The staff at Shubhanu Eye Hospital was very supportive.",
        "name" => "Neha Sharma",
        "time" => "1 week ago",
        "img" => "/assets/front/imgs/female.webp"
    ],
    [
        "desc" => "I visited Shubhanu Eye Hospital for a routine eye checkup and was impressed by the detailed consultation and professional approach of the doctors.",
        "name" => "Amit Verma",
        "time" => "1 week ago",
        "img" => "/assets/front/imgs/male.webp"
    ],
    [
        "desc" => "Dr. Bhanu Pratap Singh Pangtey gave me clear advice regarding my eye problem. The consultation was reassuring, professional, and easy to understand.",
        "name" => "Pooja Rawat",
        "time" => "1 week ago",
        "img" => "/assets/front/imgs/female.webp"
    ],
    [
        "desc" => "The care at Shubhanu Eye Hospital was wonderful. Dr. Shubha Raguram Pangtey answered all my questions patiently and guided me throughout my treatment.",
        "name" => "Sanjay Mehta",
        "time" => "1 week ago",
        "img" => "/assets/front/imgs/male.webp"
    ],
    [
        "desc" => "I am very satisfied with my visit to Shubhanu Eye Hospital. The doctors were approachable, attentive, and made the entire experience stress-free.",
        "name" => "Kavita Joshi",
        "time" => "1 week ago",
        "img" => "/assets/front/imgs/female.webp"
    ],
    [
        "desc" => "My experience at Shubhanu Eye Hospital was excellent. Dr. Bhanu Pratap Singh Pangtey explained my treatment patiently and made me feel completely comfortable.",
        "name" => "Rakesh Joshi",
        "time" => "1 week ago",
        "img" => "/assets/front/imgs/male.webp"
    ],
    [
        "desc" => "Dr. Shubha Raguram Pangtey listened carefully to my concerns and explained every step clearly. The staff at Shubhanu Eye Hospital was very supportive.",
        "name" => "Neha Sharma",
        "time" => "1 week ago",
        "img" => "/assets/front/imgs/female.webp"
    ],
    [
        "desc" => "Dr. Shubha Raguram Pangtey provided a detailed examination and explained my condition in simple words. I felt confident about following the recommended treatment.",
        "name" => "Vikas Singh",
        "time" => "1 week ago",
        "img" => "/assets/front/imgs/male.webp"
    ],
    [
        "desc" => "My family had a great experience at Shubhanu Eye Hospital. The doctors were caring, the process was smooth, and everything was explained properly.",
        "name" => "Anjali Bisht",
        "time" => "1 week ago",
        "img" => "/assets/front/imgs/female.webp"
    ],
    [
        "desc" => "Dr. Bhanu Pratap Singh Pangtey took time to understand my concerns and suggested the right approach. I truly appreciated his calm and caring nature.",
        "name" => "Deepak Kumar",
        "time" => "1 week ago",
        "img" => "/assets/front/imgs/male.webp"
    ],
    [
        "desc" => "I was impressed with Dr. Shubha Raguram Pangtey's professional approach. She explained my eye condition clearly and made the consultation very comfortable.",
        "name" => "Ritu Negi",
        "time" => "1 week ago",
        "img" => "/assets/front/imgs/female.webp"
    ],
    [
        "desc" => "Shubhanu Eye Hospital provided a comfortable and welcoming experience. The examination was thorough, and the doctors patiently addressed every concern I had.",
        "name" => "Manoj Rawat",
        "time" => "1 week ago",
        "img" => "/assets/front/imgs/male.webp"
    ],
    [
        "desc" => "I highly appreciated the guidance from Dr. Bhanu Pratap Singh Pangtey. His detailed explanation helped me understand my treatment and feel more confident.",
        "name" => "Meena Joshi",
        "time" => "1 week ago",
        "img" => "/assets/front/imgs/female.webp"
    ],
    [
        "desc" => "My experience at Shubhanu Eye Hospital was excellent. Dr. Bhanu Pratap Singh Pangtey explained my treatment patiently and made me feel completely comfortable.",
        "name" => "Rakesh Joshi",
        "time" => "1 week ago",
        "img" => "/assets/front/imgs/male.webp"
    ],
    [
        "desc" => "Dr. Shubha Raguram Pangtey listened carefully to my concerns and explained every step clearly. The staff at Shubhanu Eye Hospital was very supportive.",
        "name" => "Neha Sharma",
        "time" => "1 week ago",
        "img" => "/assets/front/imgs/female.webp"
    ],
];
?>
<section class="deva-review-section">
    <div class="container">
        <div class="deva-review-heading">
            <h2>Read reviews, <span>ride with confidence.</span></h2>
            <div class="deva-review-trust">
                <span class="deva-review-rating">4.2/5</span>
                <span class="deva-review-trust-star">★</span>
                <strong>Trustpilot</strong>
                <span class="deva-review-based">Based on 1210 reviews</span>
            </div>
        </div>
    </div>

    <div class="deva-review-container">
        <div class="deva-review-left">
            <div class="deva-review-quote">
                “
            </div>

            <h3 class="deva-review-left-title"> What our<br> customers are<br> saying</h3>
            <div class="deva-review-arrows">

                <button type="button" class="deva-review-prev" aria-label="Previous reviews">
                    ←
                </button>

                <div class="deva-review-arrow-line"></div>

                <button type="button" class="deva-review-next" aria-label="Next reviews">
                    →
                </button>

            </div>

        </div>

        <div class="deva-review-right">

            <!-- CUSTOM SLIDER -->
            <div class="deva-review-slider">

                <div class="deva-review-track">


                    @foreach($toptestimonials as $toptestimonials)
                    <div class="deva-review-slide">

                        <div class="deva-review-card">

                            <p>
                                {{$toptestimonials['desc']}}
                            </p>

                            <div class="deva-review-stars">
                                ★★★★★
                            </div>

                            <div class="deva-review-user">

                                <img src="{{$toptestimonials['img']}}" alt="Karan">

                                <div>
                                    <strong>{{$toptestimonials['name']}}</strong>
                                    <span>{{$toptestimonials['time']}}</span>
                                </div>

                            </div>

                        </div>

                    </div>
                    @endforeach

                </div>

            </div>

        </div>

    </div>

</section>

<?php 
$faqs=[
    [
        "ques" => "This is my first visit to your clinic. Should I bring my old prescription glasses?",
        "ans" => "Yes, please bring your glass / contact lens prescription and your old glasses and a list of your current medications or simply bring your medicines along. This helps us to understand your medical history. Here is a Step by Step Guide for a new patient."
    ],
    [
        "ques" => "Will my eyes be dilated for the Eye check-up?",
        "ans" => "For most ailments of the eye, dilating the eye helps in the diagnosis and hence your eyes have to be dilated. Dilatation drops will be applied to both your eyes, at intervals of ten minutes. While eyes are being dilated, you may experience mild discomfort after the first drop. Dilatation may take between 15-30 minutes and you can be comfortably seated in our lobby."
    ],
    [
        "ques" => "Can I drive my car or ride a two-wheeler after dilation?",
        "ans" => "After dilatation of the eyes, the pupil of the eye will stay slightly dilated for a couple of hours. So avoid driving vehicles after dilatation. It is always safe to have an attendant with you."
    ],
    [
        "ques" => "I want to under go Cataract Surgery in Shubhanu Eye Hospital. What should I do?",
        "ans" => "We will first evaluate your eyes. You will undergo a series of investigations and tests to see if surgery can be recommended to you. Next, we provide Counseling to prepare you for surgery and choose a new lens also called Intraocular Lens (IOL) for the implant. An IOL (Foldable) is a clear, plastic lens that requires no care and becomes a permanent part of your eye. You can select from a wide choice of IOLs based on physiological and occupational needs."
    ],
];


$faqs22=[
    [
        "ques" => "This is my first visit to your clinic. Should I bring my old prescription glasses?",
        "ans" => "Yes, please bring your glass / contact lens prescription and your old glasses and a list of your current medications or simply bring your medicines along. This helps us to understand your medical history. Here is a Step by Step Guide for a new patient."
    ],
    [
        "ques" => "Will my eyes be dilated for the Eye check-up?",
        "ans" => "For most ailments of the eye, dilating the eye helps in the diagnosis and hence your eyes have to be dilated. Dilatation drops will be applied to both your eyes, at intervals of ten minutes. While eyes are being dilated, you may experience mild discomfort after the first drop. Dilatation may take between 15-30 minutes and you can be comfortably seated in our lobby."
    ],
    [
        "ques" => "Can I drive my car or ride a two-wheeler after dilation?",
        "ans" => "After dilatation of the eyes, the pupil of the eye will stay slightly dilated for a couple of hours. So avoid driving vehicles after dilatation. It is always safe to have an attendant with you."
    ],
    [
        "ques" => "I want to under go Cataract Surgery in Shubhanu Eye Hospital. What should I do?",
        "ans" => "We will first evaluate your eyes. You will undergo a series of investigations and tests to see if surgery can be recommended to you. Next, we provide Counseling to prepare you for surgery and choose a new lens also called Intraocular Lens (IOL) for the implant. An IOL (Foldable) is a clear, plastic lens that requires no care and becomes a permanent part of your eye. You can select from a wide choice of IOLs based on physiological and occupational needs."
    ],
    [
        "ques" => "Will I be given anesthesia before the Surgery?",
        "ans" => "The surgery is an in-patient procedure and you will be given Local anesthesia / Topical anesthesia / General anesthesia."
    ],
    [
        "ques" => "How long will the surgery take? Can I go home the same day?",
        "ans" => "The whole procedure usually takes 30 minutes. You will be monitored in our recovery room for a couple of hours and then you will be discharged right away. With proper post operative care, you can get back to normal life in a week’s time."
    ],
];

?>
<section class="br-faq-section" id="FAQs">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 left-clm">
                <h2 class="br-faq-title">Frequently asked questions</h2>
                <div class="bottom-cta-left">
                    <h2>Still have a questions?</h2>
                    <p class="mt-4 mb-5">Can't find a the answer to your questions? Send us an email and we'll get back
                        to you soon as possible.</p>
                    <a href="{{route('contact')}}" class="globalbtn">Send Email</a>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="br-faq-content">
                    <div class="br-faq-list">
                        <div class="br-faq-item active">
                            <button class="br-faq-question">
                                <span class="br-faq-icon">+</span>
                                <span>Should I book an appointment before my checkup?</span>
                            </button>
                            <div class="br-faq-answer">
                                <p>We like to make sure that & patients are not made to wait for long. Some
                                    consultations can take longer than normal or there may be a sudden emergency needing
                                    attention. Hence, yes, we request you to make prior appointments.</p>
                            </div>
                        </div>
                        @foreach($faqs as $faq)
                        <div class="br-faq-item">
                            <button class="br-faq-question">
                                <span class="br-faq-icon">+</span>
                                <span>{{$faq['ques']}}</span>
                            </button>
                            <div class="br-faq-answer">
                                <p>{{$faq['ans']}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function() {

    const equipments = [{
            image: "/assets/front/imgs/equipment/10.webp",
            title: "Alcon ARGOS Biometer with Image Guidance",
            desc: "A swept-source OCT biometry system designed for advanced cataract surgery planning and IOL power calculation. It captures detailed biometric measurements along with a reference image of the eye to support precise, image-guided surgical planning.",
            features: [
                "Swept-Source OCT biometry",
                "Rapid biometric data acquisition",
                "Segmented axial length measurement",
                "Keratometry and anterior chamber measurements",
                "Advanced IOL power calculation",
                "Integrated Alcon Vision Planner",
                "Image-guided astigmatism management",
                "Digital transfer of surgical planning data to compatible OR systems",
            ]
        },
        {
            image: "/assets/front/imgs/equipment/1.webp",
            title: "ZEISS OPMI LUMERA 700",
            desc: "A premium ophthalmic surgical microscope designed to provide exceptional visualization during complex eye surgeries. Its advanced optics and illumination help surgeons achieve enhanced clarity, depth perception and precision during anterior and posterior segment procedures.",
            features: [
                "Advanced ZEISS apochromatic optics",
                "Stereo Coaxial Illumination for enhanced red reflex",
                "Motorized zoom and focusing",
                "High-definition surgical visualization",
                "Compatible with ZEISS RESIGHT for retinal surgery",
                "Optional intraoperative OCT integration",
                "Designed for cataract, retina and other microsurgical procedures",
            ]
        },
        {
            image: "/assets/front/imgs/equipment/2.webp",
            title: "LENSTAR 900 Optical Biometry System",
            desc: "An advanced optical biometry platform used for comprehensive eye measurements and precise cataract surgery planning. It measures multiple anatomical parameters of the eye and supports modern IOL power calculation methods.",
            features: [
                "Optical Low-Coherence Reflectometry (OLCR)",
                "Precise axial length measurement",
                "Corneal thickness and anterior chamber depth",
                "Lens thickness and white-to-white measurement",
                "Dual-zone keratometry",
                "Pupillometry",
                "Advanced IOL power calculation and cataract planning",
            ]
        },
        {
            image: "/assets/front/imgs/equipment/3.webp",
            title: "OCULUS Pentacam – Anterior Segment Tomography",
            desc: "A non-contact diagnostic system that creates a detailed three-dimensional analysis of the anterior segment of the eye. It provides valuable information about corneal shape, thickness and anterior chamber anatomy for corneal and cataract assessment. ",
            features: [
                "Scheimpflug-based anterior segment imaging",
                "Detailed corneal topography and tomography",
                "Corneal thickness mapping",
                "Keratoconus screening and evaluation",
                "Anterior chamber analysis",
                "Cataract and IOL planning support",
                "Useful for corneal and refractive surgery assessment",
            ]
        },
        {
            image: "/assets/front/imgs/equipment/4.webp",
            title: "Alcon CENTURION Vision System",
            desc: "An advanced phacoemulsification platform designed for modern cataract surgery. Its fluidics and energy-delivery technologies help surgeons maintain a stable anterior chamber while efficiently removing the cataractous lens.",
            features: [
                "Advanced phacoemulsification technology",
                "Active Fluidics™ technology",
                "Enhanced anterior chamber stability",
                "Advanced control of intraocular pressure",
                "Efficient torsional ultrasound energy delivery",
                "Designed to minimize post-occlusion surge",
                "Optimized cataract removal and surgical control",
            ]
        },
        {
            image: "/assets/front/imgs/equipment/5.webp",
            title: "Alcon CONSTELLATION Vision System",
            desc: "A comprehensive vitreoretinal surgical platform developed for advanced retinal and vitreous procedures. It combines vitrectomy, fluidics and surgical control technologies to support precise and complex posterior segment surgery.",
            features: [
                "Advanced vitreoretinal surgery platform",
                "High-performance vitrectomy capabilities",
                "Independent control of flow, vacuum and cut rate",
                "Automatic infusion-pressure monitoring",
                "Designed for stable intraocular pressure",
                "Multifunction footswitch control",
                "Supports complex retinal and combined procedures",
            ]
        },
        {
            image: "/assets/front/imgs/equipment/6.webp",
            title: "Alcon LEGION Phaco System",
            desc: "A modern phacoemulsification system designed for efficient and controlled cataract surgery. It combines Alcon’s torsional ultrasound technology with responsive fluidics and an intuitive surgical interface.",
            features: [
                "OZil® Torsional ultrasound technology",
                "Stable fluidics during phacoemulsification",
                "Improved surge protection",
                "Efficient cataract removal",
                "High-vacuum surgical capability",
                "Intuitive graphical user interface",
                "Supports anterior vitrectomy",
            ]
        },
        {
            image: "/assets/front/imgs/equipment/7.webp",
            title: "Topcon Maestro2 OCT & OCT Angiography",
            desc: "An advanced multimodal retinal imaging system combining OCT, OCT Angiography and true-colour fundus photography in a single compact platform. It enables detailed evaluation of retinal structure and vascular flow without the need for contrast dye during OCT-A imaging.",
            features: [
                "High-resolution Optical Coherence Tomography",
                "OCT Angiography (OCT-A)",
                "True-colour fundus photography",
                "Fully automated single-touch capture",
                "12 × 9 mm 3D wide scan",
                "Retinal, RNFL and ganglion-cell analysis",
                "Glaucoma assessment with Hood Report",
            ]
        },
        {
            image: "/assets/front/imgs/equipment/8.webp",
            title: "TOMEY EM-4000 Specular Microscope",
            desc: "A non-contact diagnostic system designed for detailed analysis of corneal endothelial cells. It provides automated measurements and corneal thickness assessment, supporting evaluation before and after various eye surgeries.",
            features: [
                "Non-contact corneal endothelial imaging",
                "Automatic alignment and measurement",
                "Automatic endothelial cell analysis",
                "Integrated non-contact pachymetry",
                "13 measurement areas",
                "Multiple cell-analysis methods",
                "Integrated database for patient follow-up",
            ]
        },
        {
            image: "/assets/front/imgs/equipment/9.webp",
            title: "iCare EIDON TrueColor Fundus Imaging System",
            desc: "An advanced confocal retinal imaging system capable of producing detailed, high-resolution TrueColor images of the retina. Its widefield technology enables visualization of both central and peripheral retinal structures, often without requiring pupil dilation.",
            features: [
                "TrueColor confocal retinal imaging",
                "High-resolution widefield fundus photography",
                "Up to 90° field in a single standard image",
                "Wide panoramic retinal imaging",
                "Non-mydriatic imaging from small pupils",
                "Automated alignment, focus and capture",
                "Effective imaging even through some media opacities",
            ]
        }
    ];

    const image = document.getElementById("eqshowMainImage");
    const title = document.getElementById("eqshowTitle");
    const desc = document.getElementById("eqshowDescription");
    const featureBox = document.querySelector(".eqshow-features");
    const items = document.querySelectorAll(".eqshow-item");
    const progress = document.querySelector(".eqshow-progress-bar");

    let current = 0;
    let timer;
    let progressTimer;

    function animateOut() {

        image.style.opacity = 0;
        image.style.transform = "translateX(-40px)";

        title.style.opacity = 0;
        title.style.transform = "translateY(20px)";

        desc.style.opacity = 0;
        desc.style.transform = "translateY(20px)";

        featureBox.style.opacity = 0;
        featureBox.style.transform = "translateY(20px)";
    }

    function animateIn() {

        image.style.opacity = 1;
        image.style.transform = "translateX(0)";

        title.style.opacity = 1;
        title.style.transform = "translateY(0)";

        desc.style.opacity = 1;
        desc.style.transform = "translateY(0)";

        featureBox.style.opacity = 1;
        featureBox.style.transform = "translateY(0)";
    }

    function showEquipment(index) {
        animateOut();
        setTimeout(() => {
            image.src = equipments[index].image;
            title.textContent = equipments[index].title;
            desc.textContent = equipments[index].desc;
            featureBox.innerHTML = "";
            equipments[index].features.forEach(function(feature) {
                featureBox.innerHTML += `
                    <div class="eqshow-feature">
                        <i class="fa-solid fa-circle-check"></i>
                        ${feature}
                    </div>
                `;

            });

            items.forEach(btn => btn.classList.remove("active"));
            items[index].classList.add("active");

            animateIn();

        }, 300);

        current = index;


    }

    function nextEquipment() {

        current++;

        if (current >= equipments.length) {
            current = 0;
        }

        showEquipment(current);

    }

    function startAuto() {

        clearInterval(timer);

        timer = setInterval(nextEquipment, 5000000);

    }

    items.forEach(function(button) {

        button.addEventListener("click", function() {

            showEquipment(parseInt(this.dataset.index));

            startAuto();

        });

    });

    image.style.transition = ".45s";
    title.style.transition = ".45s";
    desc.style.transition = ".45s";
    featureBox.style.transition = ".45s";

    showEquipment(0);

    startAuto();

});
</script>

<script>
$('.slider').slick({
    centerMode: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 500000,
    arrows: false,
    dots: true,
    infinite: true,

    responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 2
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1
            }
        }
    ]
});
</script>

<script>
$('.our-instagram-slider').slick({
    centerMode: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 500000,
    arrows: false,
    dots: true,
    infinite: true,

    responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 2
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1
            }
        }
    ]
});
</script>

<script>
$('.other-doctor-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 500000,
    arrows: false,
    dots: false,
    infinite: true,
    responsive: [{
        breakpoint: 768,
        settings: {
            slidesToShow: 1,
            arrows: false,
            dots: true,
        }
    }]
});
</script>

<script>
$('.first-hero-section').slick({
    slidesToShow: 1,
    arrows: true,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    infinite: true,
    responsive: [{
        breakpoint: 768,
        settings: {
            slidesToShow: 1,
            arrows: false,
            dots: true,
        }
    }]
});
</script>

<script>
$('.dsc-review-slider').slick({
    slidesToShow: 3,
    arrows: true,
    infinite: true,
    responsive: [{
        breakpoint: 768,
    }]
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const faqItems = document.querySelectorAll(".br-faq-item");
    faqItems.forEach(function(item) {
        const question = item.querySelector(".br-faq-question");
        const icon = item.querySelector(".br-faq-icon");
        question.addEventListener("click", function() {
            const isActive = item.classList.contains("active");
            faqItems.forEach(function(otherItem) {
                otherItem.classList.remove("active");
                const otherIcon =
                    otherItem.querySelector(".br-faq-icon");
                otherIcon.textContent = "+";
            });
            if (!isActive) {
                item.classList.add("active");
                icon.textContent = "−";
            }
        });
    });
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const slider = document.querySelector(".deva-review-slider");
    const track = document.querySelector(".deva-review-track");
    const prevButton = document.querySelector(".deva-review-prev");
    const nextButton = document.querySelector(".deva-review-next");
    const slides = document.querySelectorAll(".deva-review-slide");

    if (
        !slider ||
        !track ||
        !prevButton ||
        !nextButton ||
        slides.length === 0
    ) {
        return;
    }

    let currentIndex = 0;


    function getSlideStep() {
        const slide = slides[0];
        const slideWidth = slide.getBoundingClientRect().width;
        const trackStyle = window.getComputedStyle(track);
        const gap = parseFloat(trackStyle.gap) || 0;
        return slideWidth + gap;
    }

    function getVisibleSlides() {
        const screenWidth = window.innerWidth;
        if (screenWidth > 991) {
            return 3;
        }

        if (screenWidth > 650) {
            return 2;
        }
        return 1;
    }

    function getMaxIndex() {
        const visibleSlides = getVisibleSlides();
        return Math.max(
            0,
            slides.length - visibleSlides
        );
    }

    function moveSlider() {
        const step = getSlideStep();
        const move = step * currentIndex;
        track.style.transform = "translate3d(-" + move + "px, 0, 0)";

    }

    nextButton.addEventListener("click", function() {
        const maxIndex = getMaxIndex();
        if (currentIndex < maxIndex) {
            currentIndex++;
        } else {
            currentIndex = 0;
        }
        moveSlider();
    });

    prevButton.addEventListener("click", function() {
        const maxIndex = getMaxIndex();
        if (currentIndex > 0) {
            currentIndex--;
        } else {
           currentIndex = maxIndex;
        }
        moveSlider();
    });

    window.addEventListener("resize", function() {
        const maxIndex = getMaxIndex();
        if (currentIndex > maxIndex) {
            currentIndex = maxIndex;
        }
        moveSlider();
    });
    moveSlider();

});
</script>
@endsection