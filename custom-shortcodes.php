<?php
    function wheelwish_map_function() {
        $map_html = '<iframe allowfullscreen="" frameborder="0" style="margin:0; padding:0;" src="https://www.google.com/maps/embed/v1/place?key={KEYHERE}&amp;q=846+Broken+Sound+Pkwy+NW,+Boca+Raton,+FL+33487,+USA&amp;zoom=12&amp;maptype=satellite" id="sccds_map_iframe" width="100%" height="400"></iframe>';    
        return $map_html;
    }

    function wheelwish_calc_function() {
        $calc_html = '<div class="eccent_calc">
        <p><span class="eccent_calc_imageholder"><img src="' . get_stylesheet_directory_uri() . '/svg/calculator/money.svg"></span><input type="text" id="amount" name="amount" placeholder="Loan Amount"></p>
        <p><span class="eccent_calc_imageholder"><img src="' . get_stylesheet_directory_uri() . '/svg/calculator/calendar.svg"></span><input type="text" id="months" placeholder="Months"></p>
        <p style="display:none;"><span class="eccent_calc_imageholder"><img src="' . get_stylesheet_directory_uri() . '/svg/calculator/calendar.svg"></span><input type="text" id="years" placeholder="Years"></p>
        <p><span class="eccent_calc_imageholder"><img src="' . get_stylesheet_directory_uri() . '/svg/calculator/percentage.svg"></span><input type="text" id="interest" placeholder="Interest Rate"></p>
        <p><span class="eccent_calc_imageholder"><img src="' . get_stylesheet_directory_uri() . '/svg/calculator/down.svg"></span><input type="text" id="down" placeholder="Down Payment"></p>
        <p>
          <button class="eccent_calculator_button" onclick="myFunction()">Calculate</button>
        </p>
        <p id="output" class="eccemt_calc_output"><span>$0</span></p>
      </div>';

      return $calc_html;

    }

    function wheelwish_wheel_function() {
        $result = '';
        $wheel_html = '<div class="about">
        <div class="wrapper">
           <h1 class="black lato">Why Choose Us?</h1>
           <div class="top-wheel">
              <div class="wheel-inner">
                 <div class="wheel-wrapper">
                    <h2 class="main-wheel-text">Why Choose Us?</h2>
                    <div class="wheel-background"></div>
                    <div class="wheel-pieces in">
                       <div class="wheel-piece piece-01"><div class="wheeldata"><img src="' . get_stylesheet_directory_uri() . '/img/006-money.png"><p class="data">' . get_theme_mod('eccent_wheel_1', 'Free Delivery Anywhere In Ontario') . '</p></div>
                       <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412.000000 523.000000" preserveAspectRatio="xMidYMid meet">
                       <metadata>
                       Created by potrace 1.15, written by Peter Selinger 2001-2017
                       </metadata>
                       <g transform="translate(0.000000,523.000000) scale(0.100000,-0.100000)" fill="#3277b3" stroke="none">
                       <path d="M1876 5223 c-5 -5 -105 -10 -276 -14 -69 -1 -129 -5 -135 -8 -5 -3
                       -19 -6 -30 -7 -23 -1 -157 -13 -225 -19 -25 -3 -74 -7 -109 -10 -35 -3 -69 -9
                       -74 -12 -6 -3 -26 -8 -46 -10 -104 -10 -325 -46 -391 -62 -84 -21 -134 -32
                       -265 -57 -49 -9 -101 -21 -115 -27 -14 -6 -29 -11 -35 -12 -28 -2 -175 -49
                       -175 -55 0 -4 7 -21 15 -36 8 -16 15 -38 15 -48 0 -11 11 -56 24 -100 14 -45
                       32 -115 42 -156 9 -41 21 -84 27 -95 13 -24 58 -193 88 -325 12 -52 25 -97 29
                       -100 9 -5 13 -19 71 -250 17 -69 40 -150 50 -180 18 -50 59 -206 94 -350 7
                       -30 24 -86 37 -125 14 -38 28 -88 32 -110 9 -47 45 -180 86 -315 16 -52 41
                       -147 56 -210 15 -63 33 -128 40 -145 12 -29 38 -123 64 -230 12 -49 31 -119
                       83 -300 99 -350 132 -469 147 -535 16 -69 28 -111 95 -330 13 -42 26 -93 30
                       -115 10 -57 36 -148 46 -160 4 -6 14 -40 22 -75 23 -104 58 -240 79 -305 11
                       -33 24 -78 30 -100 27 -103 62 -221 67 -227 6 -7 79 7 181 35 88 24 165 33
                       328 41 26 1 52 5 57 8 13 7 222 2 301 -7 32 -4 84 -8 114 -10 90 -6 139 -15
                       262 -46 65 -16 122 -29 127 -29 5 0 13 15 16 32 4 18 23 82 41 141 19 59 33
                       111 33 115 -1 4 -1 9 1 12 1 3 4 16 6 30 3 14 29 106 58 206 30 99 57 198 60
                       219 4 20 9 41 12 46 3 5 7 18 9 29 3 18 26 94 76 257 6 17 12 44 15 60 3 15
                       29 111 59 213 29 102 56 201 59 220 3 20 30 116 60 215 30 99 57 196 60 215 3
                       19 12 59 21 87 9 29 16 56 17 60 0 5 12 40 25 78 20 58 52 178 68 258 2 10 9
                       32 14 50 21 63 39 123 59 197 11 41 44 158 72 260 29 102 57 203 62 225 5 22
                       27 103 49 180 46 166 69 249 102 370 14 50 38 135 55 190 17 55 33 114 36 130
                       3 17 30 118 60 225 30 107 69 249 87 315 18 66 45 158 61 205 15 47 28 88 28
                       91 0 8 -108 37 -265 72 -5 1 -71 17 -145 35 -74 17 -178 39 -230 48 -52 9
                       -140 25 -195 36 -55 11 -125 21 -155 24 -30 2 -121 13 -201 24 -81 11 -196 23
                       -255 25 -60 3 -145 9 -189 14 -44 4 -168 9 -275 10 -107 1 -225 4 -262 5 -37
                       2 -69 1 -72 -1z"></path>
                       </g>
                       </svg>
                       </div>
                       <div class="wheel-piece piece-02"><div class="wheeldata"><img src="https://autoloanservices.ca/wp-content/uploads/2020/03/a-6.png"><p class="data">' . get_theme_mod('eccent_wheel_2', 'Low Interest Rates Approval') . '</p></div>
                       <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412.000000 523.000000" preserveAspectRatio="xMidYMid meet">
                       <metadata>
                       Created by potrace 1.15, written by Peter Selinger 2001-2017
                       </metadata>
                       <g transform="translate(0.000000,523.000000) scale(0.100000,-0.100000)" fill="#3277b3" stroke="none">
                       <path d="M1876 5223 c-5 -5 -105 -10 -276 -14 -69 -1 -129 -5 -135 -8 -5 -3
                       -19 -6 -30 -7 -23 -1 -157 -13 -225 -19 -25 -3 -74 -7 -109 -10 -35 -3 -69 -9
                       -74 -12 -6 -3 -26 -8 -46 -10 -104 -10 -325 -46 -391 -62 -84 -21 -134 -32
                       -265 -57 -49 -9 -101 -21 -115 -27 -14 -6 -29 -11 -35 -12 -28 -2 -175 -49
                       -175 -55 0 -4 7 -21 15 -36 8 -16 15 -38 15 -48 0 -11 11 -56 24 -100 14 -45
                       32 -115 42 -156 9 -41 21 -84 27 -95 13 -24 58 -193 88 -325 12 -52 25 -97 29
                       -100 9 -5 13 -19 71 -250 17 -69 40 -150 50 -180 18 -50 59 -206 94 -350 7
                       -30 24 -86 37 -125 14 -38 28 -88 32 -110 9 -47 45 -180 86 -315 16 -52 41
                       -147 56 -210 15 -63 33 -128 40 -145 12 -29 38 -123 64 -230 12 -49 31 -119
                       83 -300 99 -350 132 -469 147 -535 16 -69 28 -111 95 -330 13 -42 26 -93 30
                       -115 10 -57 36 -148 46 -160 4 -6 14 -40 22 -75 23 -104 58 -240 79 -305 11
                       -33 24 -78 30 -100 27 -103 62 -221 67 -227 6 -7 79 7 181 35 88 24 165 33
                       328 41 26 1 52 5 57 8 13 7 222 2 301 -7 32 -4 84 -8 114 -10 90 -6 139 -15
                       262 -46 65 -16 122 -29 127 -29 5 0 13 15 16 32 4 18 23 82 41 141 19 59 33
                       111 33 115 -1 4 -1 9 1 12 1 3 4 16 6 30 3 14 29 106 58 206 30 99 57 198 60
                       219 4 20 9 41 12 46 3 5 7 18 9 29 3 18 26 94 76 257 6 17 12 44 15 60 3 15
                       29 111 59 213 29 102 56 201 59 220 3 20 30 116 60 215 30 99 57 196 60 215 3
                       19 12 59 21 87 9 29 16 56 17 60 0 5 12 40 25 78 20 58 52 178 68 258 2 10 9
                       32 14 50 21 63 39 123 59 197 11 41 44 158 72 260 29 102 57 203 62 225 5 22
                       27 103 49 180 46 166 69 249 102 370 14 50 38 135 55 190 17 55 33 114 36 130
                       3 17 30 118 60 225 30 107 69 249 87 315 18 66 45 158 61 205 15 47 28 88 28
                       91 0 8 -108 37 -265 72 -5 1 -71 17 -145 35 -74 17 -178 39 -230 48 -52 9
                       -140 25 -195 36 -55 11 -125 21 -155 24 -30 2 -121 13 -201 24 -81 11 -196 23
                       -255 25 -60 3 -145 9 -189 14 -44 4 -168 9 -275 10 -107 1 -225 4 -262 5 -37
                       2 -69 1 -72 -1z"></path>
                       </g>
                       </svg>
                       </div>
                       <div class="wheel-piece piece-03"><div class="wheeldata"><img src="' . get_stylesheet_directory_uri() . '/img/009-no1.png"><p class="data">' . get_theme_mod('eccent_wheel_3', '30 Day Vehicle Exchange Program') . '</p></div>
                       <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412.000000 523.000000" preserveAspectRatio="xMidYMid meet">
                       <metadata>
                       Created by potrace 1.15, written by Peter Selinger 2001-2017
                       </metadata>
                       <g transform="translate(0.000000,523.000000) scale(0.100000,-0.100000)" fill="#3277b3" stroke="none">
                       <path d="M1876 5223 c-5 -5 -105 -10 -276 -14 -69 -1 -129 -5 -135 -8 -5 -3
                       -19 -6 -30 -7 -23 -1 -157 -13 -225 -19 -25 -3 -74 -7 -109 -10 -35 -3 -69 -9
                       -74 -12 -6 -3 -26 -8 -46 -10 -104 -10 -325 -46 -391 -62 -84 -21 -134 -32
                       -265 -57 -49 -9 -101 -21 -115 -27 -14 -6 -29 -11 -35 -12 -28 -2 -175 -49
                       -175 -55 0 -4 7 -21 15 -36 8 -16 15 -38 15 -48 0 -11 11 -56 24 -100 14 -45
                       32 -115 42 -156 9 -41 21 -84 27 -95 13 -24 58 -193 88 -325 12 -52 25 -97 29
                       -100 9 -5 13 -19 71 -250 17 -69 40 -150 50 -180 18 -50 59 -206 94 -350 7
                       -30 24 -86 37 -125 14 -38 28 -88 32 -110 9 -47 45 -180 86 -315 16 -52 41
                       -147 56 -210 15 -63 33 -128 40 -145 12 -29 38 -123 64 -230 12 -49 31 -119
                       83 -300 99 -350 132 -469 147 -535 16 -69 28 -111 95 -330 13 -42 26 -93 30
                       -115 10 -57 36 -148 46 -160 4 -6 14 -40 22 -75 23 -104 58 -240 79 -305 11
                       -33 24 -78 30 -100 27 -103 62 -221 67 -227 6 -7 79 7 181 35 88 24 165 33
                       328 41 26 1 52 5 57 8 13 7 222 2 301 -7 32 -4 84 -8 114 -10 90 -6 139 -15
                       262 -46 65 -16 122 -29 127 -29 5 0 13 15 16 32 4 18 23 82 41 141 19 59 33
                       111 33 115 -1 4 -1 9 1 12 1 3 4 16 6 30 3 14 29 106 58 206 30 99 57 198 60
                       219 4 20 9 41 12 46 3 5 7 18 9 29 3 18 26 94 76 257 6 17 12 44 15 60 3 15
                       29 111 59 213 29 102 56 201 59 220 3 20 30 116 60 215 30 99 57 196 60 215 3
                       19 12 59 21 87 9 29 16 56 17 60 0 5 12 40 25 78 20 58 52 178 68 258 2 10 9
                       32 14 50 21 63 39 123 59 197 11 41 44 158 72 260 29 102 57 203 62 225 5 22
                       27 103 49 180 46 166 69 249 102 370 14 50 38 135 55 190 17 55 33 114 36 130
                       3 17 30 118 60 225 30 107 69 249 87 315 18 66 45 158 61 205 15 47 28 88 28
                       91 0 8 -108 37 -265 72 -5 1 -71 17 -145 35 -74 17 -178 39 -230 48 -52 9
                       -140 25 -195 36 -55 11 -125 21 -155 24 -30 2 -121 13 -201 24 -81 11 -196 23
                       -255 25 -60 3 -145 9 -189 14 -44 4 -168 9 -275 10 -107 1 -225 4 -262 5 -37
                       2 -69 1 -72 -1z"></path>
                       </g>
                       </svg>
                       </div>
                       <div class="wheel-piece piece-04"><div class="wheeldata"><img src="https://autoloanservices.ca/wp-content/uploads/2020/03/a-10-1.png"><p class="data">' . get_theme_mod('eccent_wheel_4', 'Best In Class Vehicle Certification Policy') . '</p></div>
                       <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412.000000 523.000000" preserveAspectRatio="xMidYMid meet">
                       <metadata>
                       Created by potrace 1.15, written by Peter Selinger 2001-2017
                       </metadata>
                       <g transform="translate(0.000000,523.000000) scale(0.100000,-0.100000)" fill="#3277b3" stroke="none">
                       <path d="M1876 5223 c-5 -5 -105 -10 -276 -14 -69 -1 -129 -5 -135 -8 -5 -3
                       -19 -6 -30 -7 -23 -1 -157 -13 -225 -19 -25 -3 -74 -7 -109 -10 -35 -3 -69 -9
                       -74 -12 -6 -3 -26 -8 -46 -10 -104 -10 -325 -46 -391 -62 -84 -21 -134 -32
                       -265 -57 -49 -9 -101 -21 -115 -27 -14 -6 -29 -11 -35 -12 -28 -2 -175 -49
                       -175 -55 0 -4 7 -21 15 -36 8 -16 15 -38 15 -48 0 -11 11 -56 24 -100 14 -45
                       32 -115 42 -156 9 -41 21 -84 27 -95 13 -24 58 -193 88 -325 12 -52 25 -97 29
                       -100 9 -5 13 -19 71 -250 17 -69 40 -150 50 -180 18 -50 59 -206 94 -350 7
                       -30 24 -86 37 -125 14 -38 28 -88 32 -110 9 -47 45 -180 86 -315 16 -52 41
                       -147 56 -210 15 -63 33 -128 40 -145 12 -29 38 -123 64 -230 12 -49 31 -119
                       83 -300 99 -350 132 -469 147 -535 16 -69 28 -111 95 -330 13 -42 26 -93 30
                       -115 10 -57 36 -148 46 -160 4 -6 14 -40 22 -75 23 -104 58 -240 79 -305 11
                       -33 24 -78 30 -100 27 -103 62 -221 67 -227 6 -7 79 7 181 35 88 24 165 33
                       328 41 26 1 52 5 57 8 13 7 222 2 301 -7 32 -4 84 -8 114 -10 90 -6 139 -15
                       262 -46 65 -16 122 -29 127 -29 5 0 13 15 16 32 4 18 23 82 41 141 19 59 33
                       111 33 115 -1 4 -1 9 1 12 1 3 4 16 6 30 3 14 29 106 58 206 30 99 57 198 60
                       219 4 20 9 41 12 46 3 5 7 18 9 29 3 18 26 94 76 257 6 17 12 44 15 60 3 15
                       29 111 59 213 29 102 56 201 59 220 3 20 30 116 60 215 30 99 57 196 60 215 3
                       19 12 59 21 87 9 29 16 56 17 60 0 5 12 40 25 78 20 58 52 178 68 258 2 10 9
                       32 14 50 21 63 39 123 59 197 11 41 44 158 72 260 29 102 57 203 62 225 5 22
                       27 103 49 180 46 166 69 249 102 370 14 50 38 135 55 190 17 55 33 114 36 130
                       3 17 30 118 60 225 30 107 69 249 87 315 18 66 45 158 61 205 15 47 28 88 28
                       91 0 8 -108 37 -265 72 -5 1 -71 17 -145 35 -74 17 -178 39 -230 48 -52 9
                       -140 25 -195 36 -55 11 -125 21 -155 24 -30 2 -121 13 -201 24 -81 11 -196 23
                       -255 25 -60 3 -145 9 -189 14 -44 4 -168 9 -275 10 -107 1 -225 4 -262 5 -37
                       2 -69 1 -72 -1z"></path>
                       </g>
                       </svg>
                       </div>
                       <div class="wheel-piece piece-05"><div class="wheeldata"><img src="https://autoloanservices.ca/wp-content/uploads/2020/03/a-8-1.png"><p class="data">' . get_theme_mod('eccent_wheel_5', 'Privacy Information Safeguarding') . '</p></div>
                       <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412.000000 523.000000" preserveAspectRatio="xMidYMid meet">
                       <metadata>
                       Created by potrace 1.15, written by Peter Selinger 2001-2017
                       </metadata>
                       <g transform="translate(0.000000,523.000000) scale(0.100000,-0.100000)" fill="#3277b3" stroke="none">
                       <path d="M1876 5223 c-5 -5 -105 -10 -276 -14 -69 -1 -129 -5 -135 -8 -5 -3
                       -19 -6 -30 -7 -23 -1 -157 -13 -225 -19 -25 -3 -74 -7 -109 -10 -35 -3 -69 -9
                       -74 -12 -6 -3 -26 -8 -46 -10 -104 -10 -325 -46 -391 -62 -84 -21 -134 -32
                       -265 -57 -49 -9 -101 -21 -115 -27 -14 -6 -29 -11 -35 -12 -28 -2 -175 -49
                       -175 -55 0 -4 7 -21 15 -36 8 -16 15 -38 15 -48 0 -11 11 -56 24 -100 14 -45
                       32 -115 42 -156 9 -41 21 -84 27 -95 13 -24 58 -193 88 -325 12 -52 25 -97 29
                       -100 9 -5 13 -19 71 -250 17 -69 40 -150 50 -180 18 -50 59 -206 94 -350 7
                       -30 24 -86 37 -125 14 -38 28 -88 32 -110 9 -47 45 -180 86 -315 16 -52 41
                       -147 56 -210 15 -63 33 -128 40 -145 12 -29 38 -123 64 -230 12 -49 31 -119
                       83 -300 99 -350 132 -469 147 -535 16 -69 28 -111 95 -330 13 -42 26 -93 30
                       -115 10 -57 36 -148 46 -160 4 -6 14 -40 22 -75 23 -104 58 -240 79 -305 11
                       -33 24 -78 30 -100 27 -103 62 -221 67 -227 6 -7 79 7 181 35 88 24 165 33
                       328 41 26 1 52 5 57 8 13 7 222 2 301 -7 32 -4 84 -8 114 -10 90 -6 139 -15
                       262 -46 65 -16 122 -29 127 -29 5 0 13 15 16 32 4 18 23 82 41 141 19 59 33
                       111 33 115 -1 4 -1 9 1 12 1 3 4 16 6 30 3 14 29 106 58 206 30 99 57 198 60
                       219 4 20 9 41 12 46 3 5 7 18 9 29 3 18 26 94 76 257 6 17 12 44 15 60 3 15
                       29 111 59 213 29 102 56 201 59 220 3 20 30 116 60 215 30 99 57 196 60 215 3
                       19 12 59 21 87 9 29 16 56 17 60 0 5 12 40 25 78 20 58 52 178 68 258 2 10 9
                       32 14 50 21 63 39 123 59 197 11 41 44 158 72 260 29 102 57 203 62 225 5 22
                       27 103 49 180 46 166 69 249 102 370 14 50 38 135 55 190 17 55 33 114 36 130
                       3 17 30 118 60 225 30 107 69 249 87 315 18 66 45 158 61 205 15 47 28 88 28
                       91 0 8 -108 37 -265 72 -5 1 -71 17 -145 35 -74 17 -178 39 -230 48 -52 9
                       -140 25 -195 36 -55 11 -125 21 -155 24 -30 2 -121 13 -201 24 -81 11 -196 23
                       -255 25 -60 3 -145 9 -189 14 -44 4 -168 9 -275 10 -107 1 -225 4 -262 5 -37
                       2 -69 1 -72 -1z"></path>
                       </g>
                       </svg>
                       </div>
                       <div class="wheel-piece piece-06"><div class="wheeldata"><img src="' . get_stylesheet_directory_uri() . '/img/007-review.png"><p class="data">' . get_theme_mod('eccent_wheel_6', 'Credit Rebuild Program') . '</p></div>
                       <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412.000000 523.000000" preserveAspectRatio="xMidYMid meet">
                       <metadata>
                       Created by potrace 1.15, written by Peter Selinger 2001-2017
                       </metadata>
                       <g transform="translate(0.000000,523.000000) scale(0.100000,-0.100000)" fill="#3277b3" stroke="none">
                       <path d="M1876 5223 c-5 -5 -105 -10 -276 -14 -69 -1 -129 -5 -135 -8 -5 -3
                       -19 -6 -30 -7 -23 -1 -157 -13 -225 -19 -25 -3 -74 -7 -109 -10 -35 -3 -69 -9
                       -74 -12 -6 -3 -26 -8 -46 -10 -104 -10 -325 -46 -391 -62 -84 -21 -134 -32
                       -265 -57 -49 -9 -101 -21 -115 -27 -14 -6 -29 -11 -35 -12 -28 -2 -175 -49
                       -175 -55 0 -4 7 -21 15 -36 8 -16 15 -38 15 -48 0 -11 11 -56 24 -100 14 -45
                       32 -115 42 -156 9 -41 21 -84 27 -95 13 -24 58 -193 88 -325 12 -52 25 -97 29
                       -100 9 -5 13 -19 71 -250 17 -69 40 -150 50 -180 18 -50 59 -206 94 -350 7
                       -30 24 -86 37 -125 14 -38 28 -88 32 -110 9 -47 45 -180 86 -315 16 -52 41
                       -147 56 -210 15 -63 33 -128 40 -145 12 -29 38 -123 64 -230 12 -49 31 -119
                       83 -300 99 -350 132 -469 147 -535 16 -69 28 -111 95 -330 13 -42 26 -93 30
                       -115 10 -57 36 -148 46 -160 4 -6 14 -40 22 -75 23 -104 58 -240 79 -305 11
                       -33 24 -78 30 -100 27 -103 62 -221 67 -227 6 -7 79 7 181 35 88 24 165 33
                       328 41 26 1 52 5 57 8 13 7 222 2 301 -7 32 -4 84 -8 114 -10 90 -6 139 -15
                       262 -46 65 -16 122 -29 127 -29 5 0 13 15 16 32 4 18 23 82 41 141 19 59 33
                       111 33 115 -1 4 -1 9 1 12 1 3 4 16 6 30 3 14 29 106 58 206 30 99 57 198 60
                       219 4 20 9 41 12 46 3 5 7 18 9 29 3 18 26 94 76 257 6 17 12 44 15 60 3 15
                       29 111 59 213 29 102 56 201 59 220 3 20 30 116 60 215 30 99 57 196 60 215 3
                       19 12 59 21 87 9 29 16 56 17 60 0 5 12 40 25 78 20 58 52 178 68 258 2 10 9
                       32 14 50 21 63 39 123 59 197 11 41 44 158 72 260 29 102 57 203 62 225 5 22
                       27 103 49 180 46 166 69 249 102 370 14 50 38 135 55 190 17 55 33 114 36 130
                       3 17 30 118 60 225 30 107 69 249 87 315 18 66 45 158 61 205 15 47 28 88 28
                       91 0 8 -108 37 -265 72 -5 1 -71 17 -145 35 -74 17 -178 39 -230 48 -52 9
                       -140 25 -195 36 -55 11 -125 21 -155 24 -30 2 -121 13 -201 24 -81 11 -196 23
                       -255 25 -60 3 -145 9 -189 14 -44 4 -168 9 -275 10 -107 1 -225 4 -262 5 -37
                       2 -69 1 -72 -1z"></path>
                       </g>
                       </svg>
                       </div>
                       <div class="wheel-piece piece-07"><div class="wheeldata"><img src="https://autoloanservices.ca/wp-content/uploads/2020/03/a-4.png"><p class="data">' . get_theme_mod('eccent_wheel_7', 'Highest Customer Satisfaction Rating') . '</p></div>
                       <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412.000000 523.000000" preserveAspectRatio="xMidYMid meet">
                       <metadata>
                       Created by potrace 1.15, written by Peter Selinger 2001-2017
                       </metadata>
                       <g transform="translate(0.000000,523.000000) scale(0.100000,-0.100000)" fill="#2f77b5" stroke="none">
                       <path d="M1876 5223 c-5 -5 -105 -10 -276 -14 -69 -1 -129 -5 -135 -8 -5 -3
                       -19 -6 -30 -7 -23 -1 -157 -13 -225 -19 -25 -3 -74 -7 -109 -10 -35 -3 -69 -9
                       -74 -12 -6 -3 -26 -8 -46 -10 -104 -10 -325 -46 -391 -62 -84 -21 -134 -32
                       -265 -57 -49 -9 -101 -21 -115 -27 -14 -6 -29 -11 -35 -12 -28 -2 -175 -49
                       -175 -55 0 -4 7 -21 15 -36 8 -16 15 -38 15 -48 0 -11 11 -56 24 -100 14 -45
                       32 -115 42 -156 9 -41 21 -84 27 -95 13 -24 58 -193 88 -325 12 -52 25 -97 29
                       -100 9 -5 13 -19 71 -250 17 -69 40 -150 50 -180 18 -50 59 -206 94 -350 7
                       -30 24 -86 37 -125 14 -38 28 -88 32 -110 9 -47 45 -180 86 -315 16 -52 41
                       -147 56 -210 15 -63 33 -128 40 -145 12 -29 38 -123 64 -230 12 -49 31 -119
                       83 -300 99 -350 132 -469 147 -535 16 -69 28 -111 95 -330 13 -42 26 -93 30
                       -115 10 -57 36 -148 46 -160 4 -6 14 -40 22 -75 23 -104 58 -240 79 -305 11
                       -33 24 -78 30 -100 27 -103 62 -221 67 -227 6 -7 79 7 181 35 88 24 165 33
                       328 41 26 1 52 5 57 8 13 7 222 2 301 -7 32 -4 84 -8 114 -10 90 -6 139 -15
                       262 -46 65 -16 122 -29 127 -29 5 0 13 15 16 32 4 18 23 82 41 141 19 59 33
                       111 33 115 -1 4 -1 9 1 12 1 3 4 16 6 30 3 14 29 106 58 206 30 99 57 198 60
                       219 4 20 9 41 12 46 3 5 7 18 9 29 3 18 26 94 76 257 6 17 12 44 15 60 3 15
                       29 111 59 213 29 102 56 201 59 220 3 20 30 116 60 215 30 99 57 196 60 215 3
                       19 12 59 21 87 9 29 16 56 17 60 0 5 12 40 25 78 20 58 52 178 68 258 2 10 9
                       32 14 50 21 63 39 123 59 197 11 41 44 158 72 260 29 102 57 203 62 225 5 22
                       27 103 49 180 46 166 69 249 102 370 14 50 38 135 55 190 17 55 33 114 36 130
                       3 17 30 118 60 225 30 107 69 249 87 315 18 66 45 158 61 205 15 47 28 88 28
                       91 0 8 -108 37 -265 72 -5 1 -71 17 -145 35 -74 17 -178 39 -230 48 -52 9
                       -140 25 -195 36 -55 11 -125 21 -155 24 -30 2 -121 13 -201 24 -81 11 -196 23
                       -255 25 -60 3 -145 9 -189 14 -44 4 -168 9 -275 10 -107 1 -225 4 -262 5 -37
                       2 -69 1 -72 -1z"></path>
                       </g>
                       </svg>
                       </div>
                       <div class="wheel-piece piece-08"><div class="wheeldata"><img src="https://autoloanservices.ca/wp-content/uploads/2020/03/a-7-1.png"><p class="data">' . get_theme_mod('eccent_wheel_8', 'Prime and Non Prime Auto Financing') . '</p></div>
                       <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412.000000 523.000000" preserveAspectRatio="xMidYMid meet">
                       <metadata>
                       Created by potrace 1.15, written by Peter Selinger 2001-2017
                       </metadata>
                       <g transform="translate(0.000000,523.000000) scale(0.100000,-0.100000)" fill="#2f77b5" stroke="none">
                       <path d="M1876 5223 c-5 -5 -105 -10 -276 -14 -69 -1 -129 -5 -135 -8 -5 -3
                       -19 -6 -30 -7 -23 -1 -157 -13 -225 -19 -25 -3 -74 -7 -109 -10 -35 -3 -69 -9
                       -74 -12 -6 -3 -26 -8 -46 -10 -104 -10 -325 -46 -391 -62 -84 -21 -134 -32
                       -265 -57 -49 -9 -101 -21 -115 -27 -14 -6 -29 -11 -35 -12 -28 -2 -175 -49
                       -175 -55 0 -4 7 -21 15 -36 8 -16 15 -38 15 -48 0 -11 11 -56 24 -100 14 -45
                       32 -115 42 -156 9 -41 21 -84 27 -95 13 -24 58 -193 88 -325 12 -52 25 -97 29
                       -100 9 -5 13 -19 71 -250 17 -69 40 -150 50 -180 18 -50 59 -206 94 -350 7
                       -30 24 -86 37 -125 14 -38 28 -88 32 -110 9 -47 45 -180 86 -315 16 -52 41
                       -147 56 -210 15 -63 33 -128 40 -145 12 -29 38 -123 64 -230 12 -49 31 -119
                       83 -300 99 -350 132 -469 147 -535 16 -69 28 -111 95 -330 13 -42 26 -93 30
                       -115 10 -57 36 -148 46 -160 4 -6 14 -40 22 -75 23 -104 58 -240 79 -305 11
                       -33 24 -78 30 -100 27 -103 62 -221 67 -227 6 -7 79 7 181 35 88 24 165 33
                       328 41 26 1 52 5 57 8 13 7 222 2 301 -7 32 -4 84 -8 114 -10 90 -6 139 -15
                       262 -46 65 -16 122 -29 127 -29 5 0 13 15 16 32 4 18 23 82 41 141 19 59 33
                       111 33 115 -1 4 -1 9 1 12 1 3 4 16 6 30 3 14 29 106 58 206 30 99 57 198 60
                       219 4 20 9 41 12 46 3 5 7 18 9 29 3 18 26 94 76 257 6 17 12 44 15 60 3 15
                       29 111 59 213 29 102 56 201 59 220 3 20 30 116 60 215 30 99 57 196 60 215 3
                       19 12 59 21 87 9 29 16 56 17 60 0 5 12 40 25 78 20 58 52 178 68 258 2 10 9
                       32 14 50 21 63 39 123 59 197 11 41 44 158 72 260 29 102 57 203 62 225 5 22
                       27 103 49 180 46 166 69 249 102 370 14 50 38 135 55 190 17 55 33 114 36 130
                       3 17 30 118 60 225 30 107 69 249 87 315 18 66 45 158 61 205 15 47 28 88 28
                       91 0 8 -108 37 -265 72 -5 1 -71 17 -145 35 -74 17 -178 39 -230 48 -52 9
                       -140 25 -195 36 -55 11 -125 21 -155 24 -30 2 -121 13 -201 24 -81 11 -196 23
                       -255 25 -60 3 -145 9 -189 14 -44 4 -168 9 -275 10 -107 1 -225 4 -262 5 -37
                       2 -69 1 -72 -1z"></path>
                       </g>
                       </svg>
                       </div>
                       <div class="wheel-piece piece-09"><div class="wheeldata"><img src="' . get_stylesheet_directory_uri() . '/img/004-clock.png"><p class="data">' . get_theme_mod('eccent_wheel_9', '24/7 Instant Application Approval') . '</p></div>
                       <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412.000000 523.000000" preserveAspectRatio="xMidYMid meet">
                       <metadata>
                       Created by potrace 1.15, written by Peter Selinger 2001-2017
                       </metadata>
                       <g transform="translate(0.000000,523.000000) scale(0.100000,-0.100000)" fill="#2f77b5" stroke="none">
                       <path d="M1876 5223 c-5 -5 -105 -10 -276 -14 -69 -1 -129 -5 -135 -8 -5 -3
                       -19 -6 -30 -7 -23 -1 -157 -13 -225 -19 -25 -3 -74 -7 -109 -10 -35 -3 -69 -9
                       -74 -12 -6 -3 -26 -8 -46 -10 -104 -10 -325 -46 -391 -62 -84 -21 -134 -32
                       -265 -57 -49 -9 -101 -21 -115 -27 -14 -6 -29 -11 -35 -12 -28 -2 -175 -49
                       -175 -55 0 -4 7 -21 15 -36 8 -16 15 -38 15 -48 0 -11 11 -56 24 -100 14 -45
                       32 -115 42 -156 9 -41 21 -84 27 -95 13 -24 58 -193 88 -325 12 -52 25 -97 29
                       -100 9 -5 13 -19 71 -250 17 -69 40 -150 50 -180 18 -50 59 -206 94 -350 7
                       -30 24 -86 37 -125 14 -38 28 -88 32 -110 9 -47 45 -180 86 -315 16 -52 41
                       -147 56 -210 15 -63 33 -128 40 -145 12 -29 38 -123 64 -230 12 -49 31 -119
                       83 -300 99 -350 132 -469 147 -535 16 -69 28 -111 95 -330 13 -42 26 -93 30
                       -115 10 -57 36 -148 46 -160 4 -6 14 -40 22 -75 23 -104 58 -240 79 -305 11
                       -33 24 -78 30 -100 27 -103 62 -221 67 -227 6 -7 79 7 181 35 88 24 165 33
                       328 41 26 1 52 5 57 8 13 7 222 2 301 -7 32 -4 84 -8 114 -10 90 -6 139 -15
                       262 -46 65 -16 122 -29 127 -29 5 0 13 15 16 32 4 18 23 82 41 141 19 59 33
                       111 33 115 -1 4 -1 9 1 12 1 3 4 16 6 30 3 14 29 106 58 206 30 99 57 198 60
                       219 4 20 9 41 12 46 3 5 7 18 9 29 3 18 26 94 76 257 6 17 12 44 15 60 3 15
                       29 111 59 213 29 102 56 201 59 220 3 20 30 116 60 215 30 99 57 196 60 215 3
                       19 12 59 21 87 9 29 16 56 17 60 0 5 12 40 25 78 20 58 52 178 68 258 2 10 9
                       32 14 50 21 63 39 123 59 197 11 41 44 158 72 260 29 102 57 203 62 225 5 22
                       27 103 49 180 46 166 69 249 102 370 14 50 38 135 55 190 17 55 33 114 36 130
                       3 17 30 118 60 225 30 107 69 249 87 315 18 66 45 158 61 205 15 47 28 88 28
                       91 0 8 -108 37 -265 72 -5 1 -71 17 -145 35 -74 17 -178 39 -230 48 -52 9
                       -140 25 -195 36 -55 11 -125 21 -155 24 -30 2 -121 13 -201 24 -81 11 -196 23
                       -255 25 -60 3 -145 9 -189 14 -44 4 -168 9 -275 10 -107 1 -225 4 -262 5 -37
                       2 -69 1 -72 -1z"></path>
                       </g>
                       </svg>
                       </div>
                       <div class="wheel-piece piece-10"><div class="wheeldata"><img src="https://autoloanservices.ca/wp-content/uploads/2020/03/a-3-1.png"><p class="data">' . get_theme_mod('eccent_wheel_10', 'Extensive Network of New and Used Vehicles') . '</p></div>
                       <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412.000000 523.000000" preserveAspectRatio="xMidYMid meet">
                       <metadata>
                       Created by potrace 1.15, written by Peter Selinger 2001-2017
                       </metadata>
                       <g transform="translate(0.000000,523.000000) scale(0.100000,-0.100000)" fill="#2f77b5" stroke="none">
                       <path d="M1876 5223 c-5 -5 -105 -10 -276 -14 -69 -1 -129 -5 -135 -8 -5 -3
                       -19 -6 -30 -7 -23 -1 -157 -13 -225 -19 -25 -3 -74 -7 -109 -10 -35 -3 -69 -9
                       -74 -12 -6 -3 -26 -8 -46 -10 -104 -10 -325 -46 -391 -62 -84 -21 -134 -32
                       -265 -57 -49 -9 -101 -21 -115 -27 -14 -6 -29 -11 -35 -12 -28 -2 -175 -49
                       -175 -55 0 -4 7 -21 15 -36 8 -16 15 -38 15 -48 0 -11 11 -56 24 -100 14 -45
                       32 -115 42 -156 9 -41 21 -84 27 -95 13 -24 58 -193 88 -325 12 -52 25 -97 29
                       -100 9 -5 13 -19 71 -250 17 -69 40 -150 50 -180 18 -50 59 -206 94 -350 7
                       -30 24 -86 37 -125 14 -38 28 -88 32 -110 9 -47 45 -180 86 -315 16 -52 41
                       -147 56 -210 15 -63 33 -128 40 -145 12 -29 38 -123 64 -230 12 -49 31 -119
                       83 -300 99 -350 132 -469 147 -535 16 -69 28 -111 95 -330 13 -42 26 -93 30
                       -115 10 -57 36 -148 46 -160 4 -6 14 -40 22 -75 23 -104 58 -240 79 -305 11
                       -33 24 -78 30 -100 27 -103 62 -221 67 -227 6 -7 79 7 181 35 88 24 165 33
                       328 41 26 1 52 5 57 8 13 7 222 2 301 -7 32 -4 84 -8 114 -10 90 -6 139 -15
                       262 -46 65 -16 122 -29 127 -29 5 0 13 15 16 32 4 18 23 82 41 141 19 59 33
                       111 33 115 -1 4 -1 9 1 12 1 3 4 16 6 30 3 14 29 106 58 206 30 99 57 198 60
                       219 4 20 9 41 12 46 3 5 7 18 9 29 3 18 26 94 76 257 6 17 12 44 15 60 3 15
                       29 111 59 213 29 102 56 201 59 220 3 20 30 116 60 215 30 99 57 196 60 215 3
                       19 12 59 21 87 9 29 16 56 17 60 0 5 12 40 25 78 20 58 52 178 68 258 2 10 9
                       32 14 50 21 63 39 123 59 197 11 41 44 158 72 260 29 102 57 203 62 225 5 22
                       27 103 49 180 46 166 69 249 102 370 14 50 38 135 55 190 17 55 33 114 36 130
                       3 17 30 118 60 225 30 107 69 249 87 315 18 66 45 158 61 205 15 47 28 88 28
                       91 0 8 -108 37 -265 72 -5 1 -71 17 -145 35 -74 17 -178 39 -230 48 -52 9
                       -140 25 -195 36 -55 11 -125 21 -155 24 -30 2 -121 13 -201 24 -81 11 -196 23
                       -255 25 -60 3 -145 9 -189 14 -44 4 -168 9 -275 10 -107 1 -225 4 -262 5 -37
                       2 -69 1 -72 -1z"></path>
                       </g>
                       </svg>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           <div class="top">
              <div class="block" style="background: #3277b3;">
                 <div class="img-wrapper"><img alt="auto loan services about" src="' . get_stylesheet_directory_uri() . '/img/006-money.png"></div>
                 <p class="opensans">' . get_theme_mod('eccent_wheel_1', 'Free Delivery Anywhere In Ontario') . '</p>
              </div>
              <div class="block" style="background: #3277b3;">
                 <div class="img-wrapper"><img alt="auto loan services about" src="https://autoloanservices.ca/wp-content/uploads/2020/03/a-6.png"></div>
                 <p class="opensans">' . get_theme_mod('eccent_wheel_2', 'Low Interest Rates Approval') . '</p>
              </div>
              <div class="block" style="background: #3277b3;">
                 <div class="img-wrapper"><img alt="auto loan services about" src="' . get_stylesheet_directory_uri() . '/img/009-no1.png"></div>
                 <p class="opensans">' . get_theme_mod('eccent_wheel_3', '30 Day Vehicle Exchange Program') . '</p>
              </div>
              <div class="block" style="background: #3277b3;">
                 <div class="img-wrapper"><img alt="auto loan services about" src="https://autoloanservices.ca/wp-content/uploads/2020/03/a-10-1.png"></div>
                 <p class="opensans">' . get_theme_mod('eccent_wheel_4', 'Best In Class Vehicle Certification Policy') . '</p>
              </div>
             <div class="block" style="background: #3277b3;">
                 <div class="img-wrapper"><img alt="auto loan services about" src="https://autoloanservices.ca/wp-content/uploads/2020/03/a-8-1.png"></div>
                 <p class="opensans">' . get_theme_mod('eccent_wheel_5', 'Privacy Information Safeguarding') . '</p>
              </div>
              <div class="block" style="background: #3277b3;">
                 <div class="img-wrapper"><img alt="auto loan services about" src="' . get_stylesheet_directory_uri() . '/img/007-review.png"></div>
                 <p class="opensans">' . get_theme_mod('eccent_wheel_6', 'Credit Rebuild Program') . '</p>
              </div>
             <div class="block" style="background: #2f77b5;">
                 <div class="img-wrapper"><img alt="auto loan services about" src="https://autoloanservices.ca/wp-content/uploads/2020/03/a-4.png"></div>
                 <p class="opensans">' . get_theme_mod('eccent_wheel_7', 'Highest Customer Satisfaction Rating') . '</p>
              </div>
              <div class="block" style="background: #2f77b5;">
                 <div class="img-wrapper"><img alt="auto loan services about" src="https://autoloanservices.ca/wp-content/uploads/2020/03/a-7-1.png"></div>
                 <p class="opensans">' . get_theme_mod('eccent_wheel_8', 'Prime and Non Prime Auto Financing') . '</p>
              </div>
              <div class="block" style="background: #2f77b5;">
                 <div class="img-wrapper"><img alt="auto loan services about" src="' . get_stylesheet_directory_uri() . '/img/004-clock.png"></div>
                 <p class="opensans">' . get_theme_mod('eccent_wheel_9', '24/7 Instant Application Approval') . '</p>
              </div>
              <div class="block" style="background: #2f77b5;">
                 <div class="img-wrapper"><img alt="auto loan services about" src="https://autoloanservices.ca/wp-content/uploads/2020/03/a-3-1.png"></div>
                 <p class="opensans">' . get_theme_mod('eccent_wheel_10', 'Extensive Network of New and Used Vehicles') . '</p>
              </div>
           </div>
        </div>
     </div>';
        $wheel_css = "<style>
        .wheeldata img {
        width: 75px!important;
        margin: 10px auto;
        display: block;
    }

    @media(min-width: 968px) {
        .wheeldata p.data {
            padding-right: 15% !important;
            padding-left: 15% !important;
        }
    }

    h2.main-wheel-text {
        font-family: Lato, sans-serif;
        font-size: 41.6px;
        font-weight: 500;
        height: auto;
        letter-spacing: normal;
        line-height: 58.24px;
    }
     
    .piece-10 p.data {
        margin-left: 20px;
          margin-right: 28px;
    }
    .piece-10 > .wheeldata {
          transform: rotate(-324deg);
          position: absolute;
          width: 85%;
          z-index: 9999999;
          margin: 20px;
    }	
    .piece-09 >.wheeldata {
        transform: rotate(-288deg);
        position: absolute;
        width: 80%;
        z-index: 9999999;
        margin: 35px;
    }
    .piece-08 > .wheeldata {
        transform: rotate(-252deg);
        position: absolute;
        width: 70%;
        z-index: 9999999;
        margin: 50px;
    }
    .piece-07 > .wheeldata {
        transform: rotate(-216deg);
        position: absolute;
        width: 78%;
        z-index: 9999999;
        margin: 30px;
    }
    .piece-06 > .wheeldata {
        transform: rotate(-180deg);
        position: absolute;
        width: 70%;
        z-index: 9999999;
        margin: 35px;
    }
    .piece-05 > .wheeldata {
        transform: rotate(-144deg);
        position: absolute;
        width: 70%;
        z-index: 9999999;
        margin: 20px;
    }
    .piece-04 > .wheeldata {
        transform: rotate(-108deg);
        position: absolute;
        width: 66%;
        z-index: 9999999;
        margin: 22px;
    }
    .piece-03 > .wheeldata {
        transform: rotate(-72deg);
        position: absolute;
        width: 85%;
        z-index: 9999999;
        margin: 20px;
    }
    .piece-02 > .wheeldata {
        /* transform: rotate(-36deg); */
        position: absolute;
        width: 75%;
        z-index: 9999999;
        margin: 25px;
    }
    .piece-01 > .wheeldata {
           transform: rotate(0deg);
        position: absolute;
        width: 65%;
        z-index: 9999999;
        margin: 15px 40px;
    }
    .icon {
        text-align: center;   
        padding-top: 50px;
        z-index: 999999;
        color: white;
    }
    
    p.data {
        text-align: center;
        color: white;
        font-size: 89%;
        display: block;
        position: relative;
          line-height: 120%;
    }
    
    h1 {
        margin: .67em 0;
        font-size: 2em;
    }
    
    img {
        border: 0;
    }
    
    @media print {
        *,
        :after,
        :before {
            color: #000!important;
            text-shadow: none!important;
            background: 0 0!important;
            -webkit-box-shadow: none!important;
            box-shadow: none!important;
        }
        img {
            page-break-inside: avoid;
        }
        img {
            max-width: 100%!important;
        }
        h2,
        h3,
        p {
            orphans: 3;
            widows: 3;
        }
        h2,
        h3 {
            page-break-after: avoid;
        }
    }
    
    * {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    
    :after,
    :before {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    
    img {
        vertical-align: middle;
    }
    
    h1,
    h2,
    h3 {
        font-family: inherit;
        font-weight: 500;
        line-height: 1.1;
        color: inherit;
    }
    
    h1,
    h2,
    h3 {
        margin-top: 20px;
        margin-bottom: 10px;
    }
    
    h1 {
        font-size: 36px;
    }
    
    h2 {
        font-size: 30px;
    }
    
    h3 {
        font-size: 24px;
    }
    
    p {
        margin: 0 0 10px;
    }
    
    
    
    .contentbuilder-css .row img {
        margin: 1.4em 0 1em;
    }
    
    .contentbuilder-css p {
        font-size: 1.07em;
        line-height: 2;
        font-weight: 300;
    }
    
    .contentbuilder-css h1,
    .contentbuilder-css h2,
    .contentbuilder-css h3 {
        font-family: 'Open Sans', sans-serif;
        font-weight: 300;
        letter-spacing: 0px;
        line-height: 1.4;
    }
    
    .contentbuilder-css h1 {
        font-size: 2.36em;
        margin: 0.4em 0;
    }
    
    .contentbuilder-css h2 {
        font-size: 2em;
        margin: 0.6em 0;
    }
    
    .contentbuilder-css h3 {
        font-size: 1.73em;
        margin: 0.7em 0;
    }
    
    .contentbuilder-css p {
        margin: 1em 0;
    }
    
    @media all and (max-width: 1024px) {
        .contentbuilder-css h1 {
            font-size: 1.9em;
        }
        .contentbuilder-css h2 {
            font-size: 1.6em;
        }
        .contentbuilder-css h3 {
            font-size: 1.3em;
        }
    }
    
    @media all and (max-width: 540px) {
        .contentbuilder-css h1 {
            font-size: 1.7em;
        }
        .contentbuilder-css h2 {
            font-size: 1.5em;
        }
        .contentbuilder-css h3 {
            font-size: 1.3em;
        }
    }
    
    .contentbuilder-css img {
        max-width: 100%;
    }
    
    
    
    .lato {
        font-family: 'Lato', sans-serif!important;
    }
    
    .opensans {
        font-family: 'Open Sans', sans-serif!important;
    }
    
    .black {
        color: #000!important;
    }
    
    .about .wrapper {
    width: 100% !important;
    }
    
    
    .about .wrapper>h1 {
        text-align: center;
        font-weight: 500;
        margin-bottom: 50px!important;
        font-size: 2.6rem;
        text-transform: uppercase;
    }
    
    .about .top {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding-top: 0px;
    }
    
    .about .wrapper{
      width: 100%;
      
        margin: 0 auto;
        padding-left: 0px; 
       padding-right: 0px;
    }
    
    .about .top .block {
        width: 100%;
         
        display: flex;
        -ms-align-items: center;
        align-items: center;
        padding: 25px;
        flex-direction: column;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        margin-top: 12px;
        border-radius: 3px;
    }
    
    .about .top .block .img-wrapper {
        width: 90px;
        height: 90px;
        margin-bottom: 15px;
        text-align: center;
    }
    
    .about .top .block img {
        max-width: 100%;
        max-height: 100%;
        margin: 0;
    }
    
    .about .top .block p {
        font-size: 1.4rem;
        line-height: 2rem;
    }
    
    .about .bottom {
        display: flex;
        justify-content: space-between;
        margin-top: 60px;
        padding-bottom: 50px;
        border-bottom: 1px solid #eee;
    }
    
    .about .bottom .block {
        text-align: center;
    }
    
    .about .bottom .block img {
        width: 130px;
    }
    
    .about .bottom .block h3 {
        font-weight: 500;
        font-size: 2.6rem;
    }
    
    .about .bottom .block p {
        font-size: 1.2rem;
        line-height: 1.2rem;
    }
    
    @media (max-width: 750px) {
        .about .top .block {
            width: 100%;
        }
        .about .bottom {
            flex-direction: column;
        }
        .about .bottom .block {
            margin-bottom: 40px;
        }
    }
    
    .top-wheel {
        display: none;
    }
    
    .top-wheel .wheel-inner {
        height: 0;
        padding-bottom: 100%;
        position: relative;
    }
    
    .top-wheel .wheel-wrapper {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
    }
    
    .top-wheel .wheel-wrapper .main-wheel-text {
        text-transform: uppercase;
        font-weight: 700;
        margin: auto!important;
        position: relative;
        text-align: center;
        z-index: 2;
        font-size: 24px;
            width: 30%;
        line-height: 28px;
        color: #222;
    }
    
    .top-wheel .wheel-wrapper .wheel-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url(https://brianr35.sg-host.com/wp-content/uploads/2020/10/wheel-background.png) center no-repeat;
        background-size: 80%;
    }
    
    .wheel-pieces {
        position: absolute;
        z-index: 3;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }
    
    .wheel-pieces .wheel-piece {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        width: 27%;
        height: 100%;
        margin-left: auto;
        margin-right: auto;
    }
    
    .wheel-pieces .wheel-piece.piece-02 {
         -webkit-transform: rotate(36deg); 
         transform: rotate(36deg); 
    }
    
    .wheel-pieces .wheel-piece.piece-03 {
        -webkit-transform: rotate(72deg);
        transform: rotate(72deg);
    }
    
    .wheel-pieces .wheel-piece.piece-04 {
        -webkit-transform: rotate(108deg);
        transform: rotate(108deg);
    }
    
    .wheel-pieces .wheel-piece.piece-05 {
        -webkit-transform: rotate(144deg);
        transform: rotate(144deg);
    }
    
    .wheel-pieces .wheel-piece.piece-06 {
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
    }
    
    .wheel-pieces .wheel-piece.piece-07 {
        -webkit-transform: rotate(216deg);
        transform: rotate(216deg);
    }
    
    .wheel-pieces .wheel-piece.piece-08 {
        -webkit-transform: rotate(252deg);
        transform: rotate(252deg);
    }
    
    .wheel-pieces .wheel-piece.piece-09 {
        -webkit-transform: rotate(288deg);
        transform: rotate(288deg);
    }
    
    .wheel-pieces .wheel-piece.piece-10 {
        -webkit-transform: rotate(324deg);
        transform: rotate(324deg);
    }
    
    .wheel-pieces .wheel-piece img {
        width: 100%;
        max-width: 100%;
        position: relative;
        top: -10%;
        opacity: 0;
        -webkit-transition: top .5s ease-in-out, opacity .3s ease;
        transition: top .5s ease-in-out, opacity .3s ease;
    }
    
    .wheel-pieces.in .wheel-piece img {
        top: 2.5%;
        opacity: 1;
    }
    
    .wheel-pieces .wheel-piece.piece-02 img {
        transition-delay: .1s;
    }
    
    .wheel-pieces .wheel-piece.piece-03 img {
        transition-delay: .6s;
    }
    
    .wheel-pieces .wheel-piece.piece-04 img {
        transition-delay: .2s;
    }
    
    .wheel-pieces .wheel-piece.piece-05 img {
        transition-delay: .7s;
    }
    
    .wheel-pieces .wheel-piece.piece-06 img {
        transition-delay: .3s;
    }
    
    .wheel-pieces .wheel-piece.piece-07 img {
        transition-delay: .8s;
    }
    
    .wheel-pieces .wheel-piece.piece-08 img {
        transition-delay: .4s;
    }
    
    .wheel-pieces .wheel-piece.piece-09 img {
        transition-delay: .9s;
    }
    
    .wheel-pieces .wheel-piece.piece-10 img {
        transition-delay: .5s;
    }
    
    @media (max-width: 967px) {
        .about {
            background-color: #FFF;
        }
        .about .wrapper>h1 {
            color: #222 !important;
            margin-top: 0px !important;
            margin-bottom: 30px !important;
            font-weight: 700;
            font-size: 42px;
            line-height: 46px;
        }
        .about .bottom {
            margin-left: -6%;
            margin-right: -6%;
            padding-left: 6%;
            padding-right: 6%;
        }
        .about .top .block p {
            color: #fff;
            font-weight: 400;
            font-size: 18px !important;
            line-height: 24px !important;
        }
    }
    
    @media (min-width: 968px) {
        .about .top,
        .about>.wrapper>h1 {
            display: none;
        }
        .top-wheel {
            display: block;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }
    }
    
    @media (min-width: 1024px) {
        .top-wheel {
            max-width: 90%;
        }
    }
    
    @media (min-width: 1280px) {
        .top-wheel {
            max-width: 80%;
        }
    }
    
    @media (min-width: 1400px) {
        .top-wheel {
            max-width: 75%;
        }
    }
    
    @media (min-width: 1600px) {
        .top-wheel {
            max-width: 83%;
        }
    }
    
    @media (min-width: 1920px) {
        .top-wheel .wheel-wrapper .main-wheel-text {
            font-size: 36px;
            line-height: 40px;
        }
    }
    </style>";
        $result = $wheel_css . $wheel_html;
        return $result;
   }

   function eccent_review_function() {
    $result = "";
    $result .= '<h2>Review Your Details</h2>
    <h3>Order Details</h3>
    <div class="eccent_revieworder">
        <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Year</span><span class="eccent_revieworder_value" id="eccent_revieworder_year">Lorem Ipsum</span></div>
        <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Make</span><span class="eccent_revieworder_value" id="eccent_revieworder_make">Lorem Ipsum</span></div>
        <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Model</span><span class="eccent_revieworder_value" id="eccent_revieworder_model">Lorem Ipsum</span></div>
        <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Trim</span><span class="eccent_revieworder_value" id="eccent_revieworder_trim">Lorem Ipsum</span></div>
        <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Color Preference</span><span class="eccent_revieworder_value" id="eccent_revieworder_colorpref">Lorem Ipsum</span></div>
        <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Transmission</span><span class="eccent_revieworder_value" id="eccent_revieworder_transmission">Lorem Ipsum</span></div>
        <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Drive Train</span><span class="eccent_revieworder_value" id="eccent_revieworder_drivetrain">Lorem Ipsum</span></div>
        <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Fuel Type</span><span class="eccent_revieworder_value" id="eccent_revieworder_fuel">Lorem Ipsum</span></div>
        <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Options & Packages</span><span class="eccent_revieworder_value" id="eccent_revieworder_packages">Lorem Ipsum</span></div>
        <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Accessories</span><span class="eccent_revieworder_value" id="eccent_revieworder_accessories">Lorem Ipsum</span></div>
        <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Protection Addons</span><span class="eccent_revieworder_value" id="eccent_revieworder_protection">Lorem Ipsum</span></div>
        <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Anything Else?</span><span class="eccent_revieworder_value" id="eccent_revieworder_anythingelse">Lorem Ipsum</span></div>
    </div>
    <h3>Payment Details</h3>
    <div class="eccent_revieworder">
        <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Payment Method</span><span class="eccent_revieworder_value" id="eccent_revieworder_paymethod">Lorem Ipsum</span></div>
        <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Cash Price</span><span class="eccent_revieworder_value" id="eccent_revieworder_cashprice">Lorem Ipsum</span></div>
        <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Payment Term</span><span class="eccent_revieworder_value" id="eccent_revieworder_term">Lorem Ipsum</span></div>
        <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Payment Frequency</span><span class="eccent_revieworder_value" id="eccent_revieworder_payfrequency">Lorem Ipsum</span></div>
        <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Down Payment</span><span class="eccent_revieworder_value" id="eccent_revieworder_downpayment">Lorem Ipsum</span></div>
        <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">How To Negotiate?</span><span class="eccent_revieworder_value" id="eccent_revieworder_negotiatealt">Lorem Ipsum</span></div>
        <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Negotiating Price</span><span class="eccent_revieworder_value" id="eccent_revieworder_negotiateprice">Lorem Ipsum</span></div>
    </div>
    <h3>Trade-In Details</h3>
    <div class="eccent_revieworder">
        <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Trade In?</span><span class="eccent_revieworder_value" id="eccent_revieworder_tradein">Lorem Ipsum</span></div>
        <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Vin Number</span><span class="eccent_revieworder_value" id="eccent_revieworder_vin">Lorem Ipsum</span></div>
        <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Mileage</span><span class="eccent_revieworder_value" id="eccent_revieworder_tmileage">Lorem Ipsum</span></div>
        <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Year</span><span class="eccent_revieworder_value" id="eccent_revieworder_tyear">Lorem Ipsum</span></div>
        <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Make</span><span class="eccent_revieworder_value" id="eccent_revieworder_tmake">Lorem Ipsum</span></div>
        <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Model</span><span class="eccent_revieworder_value" id="eccent_revieworder_tmodel">Lorem Ipsum</span></div>
        <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Trim</span><span class="eccent_revieworder_value" id="eccent_revieworder_ttrim">Lorem Ipsum</span></div>
        <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Color</span><span class="eccent_revieworder_value" id="eccent_revieworder_tcolor">Lorem Ipsum</span></div>
        <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Transmission</span><span class="eccent_revieworder_value" id="eccent_revieworder_ttransmission">Lorem Ipsum</span></div>
        <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Drive Train</span><span class="eccent_revieworder_value" id="eccent_revieworder_tdrivetrain">Lorem Ipsum</span></div>
        <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Fuel Type</span><span class="eccent_revieworder_value" id="eccent_revieworder_tfuel">Lorem Ipsum</span></div>
        <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Any Damage?</span><span class="eccent_revieworder_value" id="eccent_revieworder_tdamage">Lorem Ipsum</span></div>
        <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Anything Else?</span><span class="eccent_revieworder_value" id="eccent_revieworder_tother">Lorem Ipsum</span></div>
        <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Dollar Expectation</span><span class="eccent_revieworder_value" id="eccent_revieworder_tdollarExpectation">Lorem Ipsum</span></div>
        <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Dollar Value</span><span class="eccent_revieworder_value" id="eccent_revieworder_tdollarValue">Lorem Ipsum</span></div>
    </div>';
    
    return $result;
}

function eccent_viewdetails_function() {
    $result = '';
    $temporary_id = $_GET['id'];
    if(isset($temporary_id)) {
        $order_exists = false;

        $wc_year = '';
        $wc_make = '';
        $wc_model = '';
        $wc_trim = '';
        $wc_colorpref = '';
        $wc_transmission = '';
        $wc_drivetrain = '';
        $wc_fuel = '';
        $wc_packages = '';
        $wc_accessories = '';
        $wc_protection = '';
        $wc_anythingelse = '';

        $wc_paymethod = '';
        $wc_cashprice = '';
        $wc_term = '';
        $wc_payfrequency = '';
        $wc_downpayment = '';
        $wc_negotiatealt = '';
        $wc_negotiateprice = '';

        $wc_tradein = '';
        $wc_vin = '';
        $wc_tmileage = '';
        $wc_tyear = '';
        $wc_tmake = '';
        $wc_tmodel = '';
        $wc_ttrim = '';
        $wc_tcolor = '';
        $wc_ttransmission = '';
        $wc_tdrivetrain = '';
        $wc_tfuel = '';
        $wc_tdamage = '';
        $wc_tother = '';
    
        $args = array(
            'customer_id' => get_current_user_id()
        );
        $orders = wc_get_orders($args);
        
        for($x = 0; $x < count($orders); $x++) {
            if($orders[$x]->get_id() == $temporary_id) {
                $temp_order = $orders[$x];
                $wc_year = $temp_order->get_meta("wc_year");
                $wc_make = $temp_order->get_meta("wc_make");
                $wc_model = $temp_order->get_meta("wc_model");
                $wc_trim = $temp_order->get_meta("wc_trim");
                $wc_colorpref = $temp_order->get_meta("wc_colorpref");
                $wc_transmission = $temp_order->get_meta("wc_transmission");
                $wc_drivetrain = $temp_order->get_meta("wc_drivetrain");
                $wc_fuel = $temp_order->get_meta("wc_fuel");
                $wc_packages = $temp_order->get_meta("wc_packages");
                $wc_accessories = $temp_order->get_meta("wc_accessories");
                $wc_protection = $temp_order->get_meta("wc_protection");
                $wc_anythingelse = $temp_order->get_meta("wc_anythingelse");

                $wc_paymethod = $temp_order->get_meta("wc_paymethod");
                $wc_cashprice = $temp_order->get_meta("wc_cashprice");
                $wc_term = $temp_order->get_meta("wc_term");
                $wc_payfrequency = $temp_order->get_meta("wc_payfrequency");
                $wc_downpayment = $temp_order->get_meta("wc_downpayment");
                $wc_negotiatealt = $temp_order->get_meta("wc_negotiatealt");
                $wc_negotiateprice = $temp_order->get_meta("wc_negotiateprice");

                $wc_tradein = $temp_order->get_meta("wc_tradein");
                $wc_vin = $temp_order->get_meta("wc_vin");
                $wc_tmileage = $temp_order->get_meta("wc_tmileage");
                $wc_tyear = $temp_order->get_meta("wc_tyear");
                $wc_tmake = $temp_order->get_meta("wc_tmake");
                $wc_tmodel = $temp_order->get_meta("wc_tmodel");
                $wc_ttrim = $temp_order->get_meta("wc_ttrim");
                $wc_tcolor = $temp_order->get_meta("wc_tcolor");
                $wc_ttransmission = $temp_order->get_meta("wc_ttransmission");
                $wc_tdrivetrain = $temp_order->get_meta("wc_tdrivetrain");
                $wc_tfuel = $temp_order->get_meta("wc_tfuel");
                $wc_tdamage = $temp_order->get_meta("wc_tdamage");
                $wc_tother = $temp_order->get_meta("wc_tother");
                $wc_tdollarexpectation = $temp_order->get_meta("wc_tdollarexpectation");
                $wc_tdollarvalue = $temp_order->get_meta("wc_tdollarvalue");

                $order_exists = true;
            }
        }

        if($order_exists == true) {
            $result .= '<div class="eccent_revieworder_container">
            <h2 style="margin-top:0 !important;">Your Order Details</h2>
            <h3>Order Details</h3>
            <div class="eccent_revieworder">
                <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Year</span><span class="eccent_revieworder_value" id="eccent_revieworder_year">' . $wc_year . '</span></div>
                <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Make</span><span class="eccent_revieworder_value" id="eccent_revieworder_make">' . $wc_make . '</span></div>
                <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Model</span><span class="eccent_revieworder_value" id="eccent_revieworder_model">' . $wc_model . '</span></div>
                <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Trim</span><span class="eccent_revieworder_value" id="eccent_revieworder_trim">' .  $wc_trim . '</span></div>
                <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Color Preference</span><span class="eccent_revieworder_value" id="eccent_revieworder_colorpref">' . $wc_colorpref . '</span></div>
                <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Transmission</span><span class="eccent_revieworder_value" id="eccent_revieworder_transmission">' . $wc_transmission . '</span></div>
                <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Drive Train</span><span class="eccent_revieworder_value" id="eccent_revieworder_drivetrain">' . $wc_drivetrain . '</span></div>
                <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Fuel Type</span><span class="eccent_revieworder_value" id="eccent_revieworder_fuel">' . $wc_fuel . '</span></div>
                <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Options & Packages</span><span class="eccent_revieworder_value" id="eccent_revieworder_packages">' . $wc_packages . '</span></div>
                <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Accessories</span><span class="eccent_revieworder_value" id="eccent_revieworder_accessories">' . $wc_accessories . '</span></div>
                <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Protection Addons</span><span class="eccent_revieworder_value" id="eccent_revieworder_protection">' . $wc_protection . '</span></div>
                <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Anything Else?</span><span class="eccent_revieworder_value" id="eccent_revieworder_anythingelse">' . $wc_anythingelse . '</span></div>
            </div>
            <h3>Payment Details</h3>
            <div class="eccent_revieworder">
                <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Payment Method</span><span class="eccent_revieworder_value" id="eccent_revieworder_paymethod">' . $wc_paymethod . '</span></div>
                <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Cash Price</span><span class="eccent_revieworder_value" id="eccent_revieworder_cashprice">' . $wc_cashprice . '</span></div>
                <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Payment Term</span><span class="eccent_revieworder_value" id="eccent_revieworder_term">' . $wc_term . '</span></div>
                <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Payment Frequency</span><span class="eccent_revieworder_value" id="eccent_revieworder_payfrequency">' . $wc_payfrequency . '</span></div>
                <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Down Payment</span><span class="eccent_revieworder_value" id="eccent_revieworder_downpayment">' . $wc_downpayment . '</span></div>
                <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">How To Negotiate?</span><span class="eccent_revieworder_value" id="eccent_revieworder_negotiatealt">' . $wc_negotiatealt . '</span></div>
                <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Negotiating Price</span><span class="eccent_revieworder_value" id="eccent_revieworder_negotiateprice">' . $wc_negotiateprice . '</span></div>
            </div>
            <h3>Trade-In Details</h3>
            <div class="eccent_revieworder">
                <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Trade In?</span><span class="eccent_revieworder_value" id="eccent_revieworder_tradein">' . $wc_tradein . '</span></div>
                <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Vin Number</span><span class="eccent_revieworder_value" id="eccent_revieworder_vin">' . $wc_vin . '</span></div>
                <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Mileage</span><span class="eccent_revieworder_value" id="eccent_revieworder_tmileage">' . $wc_tmileage . '</span></div>
                <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Year</span><span class="eccent_revieworder_value" id="eccent_revieworder_tyear">' . $wc_tyear . '</span></div>
                <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Make</span><span class="eccent_revieworder_value" id="eccent_revieworder_tmake">' . $wc_tmake . '</span></div>
                <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Model</span><span class="eccent_revieworder_value" id="eccent_revieworder_tmodel">' . $wc_tmodel . '</span></div>
                <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Trim</span><span class="eccent_revieworder_value" id="eccent_revieworder_ttrim">' . $wc_ttrim . '</span></div>
                <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Color</span><span class="eccent_revieworder_value" id="eccent_revieworder_tcolor">' . $wc_tcolor . '</span></div>
                <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Transmission</span><span class="eccent_revieworder_value" id="eccent_revieworder_ttransmission">' . $wc_ttransmission . '</span></div>
                <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Drive Train</span><span class="eccent_revieworder_value" id="eccent_revieworder_tdrivetrain">' . $wc_tdrivetrain . '</span></div>
                <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Fuel Type</span><span class="eccent_revieworder_value" id="eccent_revieworder_tfuel">' . $wc_tfuel . '</span></div>
                <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Any Damage?</span><span class="eccent_revieworder_value" id="eccent_revieworder_tdamage">' . $wc_tdamage . '</span></div>
                <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Anything Else?</span><span class="eccent_revieworder_value" id="eccent_revieworder_tother">' . $wc_tother . '</span></div>
                <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Dollar Expectation</span><span class="eccent_revieworder_value" id="eccent_revieworder_tdollarExpectation">' . $wc_tdollarexpectation . '</span></div>
                <div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Dollar Value</span><span class="eccent_revieworder_value" id="eccent_revieworder_tdollarValue">' . $wc_tdollarvalue . '</span></div>
            </div>
            </div>';
        } else {
            echo 'Error: Order does not exist';
        }
        
    } else {
        $result = 'Error: No ID Set.';
    }
    return $result;
}

function eccent_orders_function() {
    $orders_data = array();
    $car_data = array();
    $date_data = array();
    $status_data = array();

    $args = array(
        'customer_id' => get_current_user_id()
    );
    $orders = wc_get_orders($args);
    
    for($x = 0; $x < count($orders); $x++) {
        // d($orders[$x]->get_base_data());
        // d($orders[$x]);
        $temp_order = $orders[$x];

        $wc_make = $temp_order->get_meta("wc_make");
        $wc_model = $temp_order->get_meta("wc_model");
        $wc_trim = $temp_order->get_meta("wc_trim");
        $wc_colorpref = $temp_order->get_meta("wc_colorpref");

        array_push($car_data, $wc_make . ' ' . $wc_model . ' ' . $wc_trim . ', ' . $wc_colorpref); 
        array_push($date_data, $temp_order->get_date_created()->format ('Y-m-d'));
        array_push($status_data, $temp_order->get_status());
        array_push($orders_data, $temp_order->get_base_data());
    }

    if(count($orders_data) > 0) {

        for($z = 0; $z < count($orders_data); $z++) {
            // d($orders_data[$z]);
            // d($orders_data[$z]['billing']);
            echo '<div class="eccent_revieworder" style="position: relative !important; margin-top: 7px !important;">';
            echo '<div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Vehicle</span><span class="eccent_revieworder_value" style="text-transform: capitalize">' . $car_data[$z] . '</span></div>';
            echo '<div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Date</span><span class="eccent_revieworder_value">' . $date_data[$z] . '</span></div>';
            echo '<div class="eccent_revieworder_column"><span class="eccent_revieworder_title">Status</span><span class="eccent_revieworder_value" style="text-transform: capitalize">' . $status_data[$z] . '</span></div>';
            echo '<div class="eccent_revieworder_column"><span class="eccent_revieworder_title">More</span><span class="eccent_revieworder_value" style="text-transform: capitalize"><a href="' . get_site_url() . '/Order?id=' . $orders_data[$z]['id'] . '" target="_blank">Order Details</a></span></div>';
            echo '</div>';
        }
    } else {
        echo 'You Currently Have No Orders.';
    }

}

add_shortcode('wheelwish_wheel', 'wheelwish_wheel_function');
add_shortcode('wheelwish_map', 'wheelwish_map_function');
add_shortcode('wheelwish_calc', 'wheelwish_calc_function');
add_shortcode( 'wheelwish_revieworder', 'eccent_review_function' );
add_shortcode( 'wheelwish_viewdetails', 'eccent_viewdetails_function' );
add_shortcode( 'wheelwish_orders', 'eccent_orders_function' );

?>
