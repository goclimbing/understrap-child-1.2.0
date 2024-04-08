<?php
#vars
$blocks = get_field('blocks');

?>

<style>

</style>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="bootstrap" viewBox="0 0 118 94">
        <title>Bootstrap</title>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
    </symbol>



    <symbol id="checkbox" viewBox="0 0 64 64">
        <style type="text/css">
            .st0 {
                fill: #6AB836;
                stroke: #37474F;
                stroke-width: 2;
                stroke-linecap: round;
                stroke-linejoin: round;
                stroke-miterlimit: 10;
            }
        </style>
        <path class="st0" d="M3.1,37.8L15.9,27l0.8,13.6c0,0,28.1-33.4,45.9-34.8c0,0-33.4,24-43.2,51.9L7.7,59.2L3.1,37.8z" />

    </symbol>

    <symbol id="power" viewBox="0 0 128 128">
        <style type="text/css">
            .st0 {
                fill: #FFFFFF;
            }

            .st1 {
                fill: #37474F;
            }

            .st2 {
                fill: #B7DA9A;
            }

            .st3 {
                fill: none;
            }

            .st4 {
                fill: #6FB633;
            }
        </style>
        <g>
            <g>
                <rect x="3" y="14" class="st0" width="73" height="74" />
                <path class="st1" d="M76,90H3c-1.1,0-2-0.9-2-2V14c0-1.1,0.9-2,2-2h73c1.1,0,2,0.9,2,2v74C78,89.1,77.1,90,76,90z M5,86h69V16H5
			V86z" />
            </g>
            <g>
                <circle class="orange" cx="39.7" cy="51" r="22.7" />
                <path class="st1" d="M39.7,75.7C26.1,75.7,15,64.6,15,51s11.1-24.7,24.7-24.7S64.4,37.4,64.4,51S53.3,75.7,39.7,75.7z M39.7,30.3
			C28.3,30.3,19,39.6,19,51s9.3,20.7,20.7,20.7S60.4,62.4,60.4,51S51.1,30.3,39.7,30.3z" />
            </g>
            <g>
                <g>
                    <line class="st3" x1="32" y1="47" x2="32" y2="55" />
                    <path class="st1" d="M32,57c-1.1,0-2-0.9-2-2v-8c0-1.1,0.9-2,2-2c1.1,0,2,0.9,2,2v8C34,56.1,33.1,57,32,57z" />
                </g>
                <g>
                    <line class="st3" x1="47" y1="47" x2="47" y2="55" />
                    <path class="st1" d="M47,57c-1.1,0-2-0.9-2-2v-8c0-1.1,0.9-2,2-2s2,0.9,2,2v8C49,56.1,48.1,57,47,57z" />
                </g>
            </g>
            <g>
                <g>
                    <g>
                        <g>
                            <line class="st3" x1="97" y1="22" x2="97" y2="43" />
                            <path class="st1" d="M97,45c-1.1,0-2-0.9-2-2V22c0-1.1,0.9-2,2-2s2,0.9,2,2v21C99,44.1,98.1,45,97,45z" />
                        </g>
                        <g>
                            <line class="st3" x1="115" y1="22" x2="115" y2="43" />
                            <path class="st1" d="M115,45c-1.1,0-2-0.9-2-2V22c0-1.1,0.9-2,2-2s2,0.9,2,2v21C117,44.1,116.1,45,115,45z" />
                        </g>
                    </g>
                    <g>
                        <path class="orange" d="M84.8,42c0,12,9.4,21.1,21.1,21.1C117.5,63.1,127,54,127,42H84.8z" />
                        <path class="st1" d="M105.9,65.1C93,65.1,82.8,54.9,82.8,42c0-1.1,0.9-2,2-2h42.1c1.1,0,2,0.9,2,2
					C128.9,54.9,118.8,65.1,105.9,65.1z M86.9,44c1,9.7,8.9,17.1,19,17.1c10,0,18-7.3,19-17.1H86.9z" />
                    </g>
                </g>
                <g>
                    <path class="st1" d="M79.9,117.6H8.7c-1.1,0-2-0.9-2-2s0.9-2,2-2l0,0h71.2c12.7,0,23.1-10.4,23.1-23.1V77.1c0-1.1,0.9-2,2-2
				s2,0.9,2,2v13.4C107,105.4,94.9,117.6,79.9,117.6z" />
                </g>
                <g>
                    <path class="st4" d="M121.1,71.5L121.1,71.5c0,2.8-3.2,5.1-7.1,5.1H97.8c-3.9,0-7.1-2.3-7.1-5.1l0,0" />
                    <path class="st1" d="M114,78H97.8c-5,0-9.1-2.9-9.1-6.5c0-0.8,0.9-1.4,2-1.4s2,0.6,2,1.4c0,2,2.3,3.6,5.1,3.6H114
				c2.8,0,5.1-1.6,5.1-3.6c0-0.8,0.9-1.4,2-1.4s2,0.6,2,1.4C123.1,75.1,119,78,114,78z" />
                </g>
            </g>
        </g>
    </symbol>

    <symbol id="forsale" viewBox="0 0 64 64">
        <style type="text/css">
            .st0 {
                fill: #FFFFFF;
                stroke: #37474F;
                stroke-width: 2;
                stroke-linecap: round;
                stroke-linejoin: round;
                stroke-miterlimit: 10;
            }

            .st1 {
                fill: #6AB836;
                stroke: #37474F;
                stroke-width: 2;
                stroke-linecap: round;
                stroke-linejoin: round;
                stroke-miterlimit: 10;
            }

            .st2 {
                fill: #B7DA9B;
                stroke: #37474F;
                stroke-width: 2;
                stroke-linecap: round;
                stroke-linejoin: round;
                stroke-miterlimit: 10;
            }

            .st3 {
                fill: #FFFFFF;
                stroke: #FFFFFF;
                stroke-miterlimit: 10;
            }
        </style>
        <g>
            <line class="st0" x1="9.7" y1="61.8" x2="9.7" y2="1.8" />
            <line class="st0" x1="61.7" y1="5.8" x2="1.7" y2="5.8" />
            <polyline class="st1" points="54.7,16.8 61.7,16.8 61.7,40.8 15.7,40.8 15.7,16.8 21.7,16.8 	" />
            <line class="st2" x1="30.7" y1="16.8" x2="46.7" y2="16.8" />
            <g>
                <path class="st0" d="M29.1,17.8c0,1.6-1.3,2.9-2.9,2.9c-1.6,0-2.9-1.3-2.9-2.9c0-1.6,1.3-2.9,2.9-2.9
			C27.8,14.9,29.1,16.2,29.1,17.8z" />
                <path class="st0" d="M53.4,17.8c0,1.6-1.3,2.9-2.9,2.9c-1.6,0-2.9-1.3-2.9-2.9c0-1.6,1.3-2.9,2.9-2.9
			C52.1,14.9,53.4,16.2,53.4,17.8z" />
            </g>
            <line class="st2" x1="26.2" y1="8.9" x2="26.2" y2="14.9" />
            <line class="st2" x1="50.7" y1="8.8" x2="50.7" y2="14.8" />
            <g>
                <path class="st3" d="M19.4,24.6H26v2h-4.1v2.5h3.9v2h-3.9v4.3h-2.4V24.6z" />
                <path class="st3" d="M28.7,32.9c0.6,0.3,1.7,0.7,2.7,0.7c1.1,0,1.7-0.5,1.7-1.2c0-0.7-0.5-1.1-1.8-1.5c-1.8-0.6-3-1.6-3-3.2
			c0-1.8,1.6-3.2,4.1-3.2c1.2,0,2.1,0.2,2.8,0.5l-0.5,2c-0.4-0.2-1.2-0.5-2.2-0.5c-1.1,0-1.6,0.5-1.6,1c0,0.7,0.6,1,2,1.5
			c1.9,0.7,2.8,1.7,2.8,3.2c0,1.8-1.4,3.3-4.3,3.3c-1.2,0-2.4-0.3-3.1-0.7L28.7,32.9z" />
                <path class="st3" d="M38.1,24.8c0.6-0.1,1.9-0.2,3.2-0.2c1.5,0,2.4,0.1,3.2,0.6c0.8,0.4,1.3,1.1,1.3,2.1c0,0.9-0.6,1.8-1.8,2.3v0
			c1.2,0.3,2.1,1.3,2.1,2.6c0,1-0.4,1.8-1.1,2.3c-0.8,0.6-2.1,1-4.2,1c-1.2,0-2.1-0.1-2.6-0.2V24.8z M40.5,28.9h0.8
			c1.3,0,2-0.5,2-1.3c0-0.8-0.6-1.2-1.7-1.2c-0.5,0-0.8,0-1,0.1V28.9z M40.5,33.7c0.2,0,0.5,0,0.9,0c1.1,0,2.1-0.4,2.1-1.6
			c0-1.1-1-1.5-2.2-1.5h-0.8V33.7z" />
                <path class="st3" d="M58.4,29.9c0,3.6-2.1,5.7-5.3,5.7c-3.2,0-5.1-2.4-5.1-5.5c0-3.2,2.1-5.7,5.3-5.7
			C56.6,24.4,58.4,26.9,58.4,29.9z M50.6,30c0,2.1,1,3.6,2.6,3.6c1.6,0,2.6-1.6,2.6-3.7c0-2-0.9-3.6-2.6-3.6
			C51.6,26.4,50.6,27.9,50.6,30z" />
            </g>
        </g>
    </symbol>

    <symbol id="key" viewBox="0 0 128 128">
        <style type="text/css">
            .st0 {
                fill: none;
            }

            .st1 {
                fill: #37474F;
            }

            .st2 {
                fill: #6BB641;
            }

            .st3 {
                fill: #BADA97;
            }

            .st4 {
                fill: #FFFFFF;
            }
        </style>
        <g>
            <g>
                <path class="st0" d="M57.3,72.6l19.8-19.8c4.9-4.9,12.8-4.9,17.7,0l4.7,4.7c4.9,4.9,4.9,12.8,0,17.7" />
                <path class="st1" d="M99.5,77.2c-0.5,0-1-0.2-1.4-0.6c-0.8-0.8-0.8-2,0-2.8c2-2,3.1-4.6,3.1-7.4s-1.1-5.4-3.1-7.4l-4.7-4.7
			c-4.1-4.1-10.8-4.1-14.8,0L58.7,74c-0.8,0.8-2,0.8-2.8,0s-0.8-2,0-2.8l19.8-19.8c5.7-5.7,14.9-5.7,20.5,0l4.7,4.7
			c2.7,2.7,4.2,6.4,4.2,10.2c0,3.9-1.5,7.5-4.2,10.2C100.5,77,100,77.2,99.5,77.2z" />
            </g>
            <g>
                <path class="st0" d="M69.9,60.2L50,80c-4.9,4.9-12.8,4.9-17.7,0l-4.7-4.7c-4.9-4.9-4.9-12.8,0-17.7" />
                <path class="st1" d="M41.2,85.7c-3.7,0-7.4-1.4-10.2-4.2l-4.7-4.7C23.5,74,22,70.4,22,66.5s1.5-7.5,4.2-10.3c0.8-0.8,2-0.8,2.8,0
			s0.8,2,0,2.8c-2,2-3.1,4.6-3.1,7.4s1.1,5.4,3.1,7.4l4.7,4.7c4.1,4.1,10.8,4.1,14.8,0l19.8-19.8c0.8-0.8,2-0.8,2.8,0s0.8,2,0,2.8
			l-19.6,20C48.6,84.3,44.9,85.7,41.2,85.7z" />
            </g>
            <g>

                <rect x="51.9" y="83.3" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -46.9338 83.0984)" class="orange" width="49.9" height="29.8" />
                <path class="st1" d="M69.7,128.4c-0.5,0-1-0.2-1.4-0.6l-21.1-21.1c-0.8-0.8-0.8-2,0-2.8l35.3-35.3c0.4-0.4,0.9-0.6,1.4-0.6l0,0
			c0.5,0,1,0.2,1.4,0.6l21.1,21.1c0.8,0.8,0.8,2,0,2.8l-35.3,35.3C70.8,128.2,70.3,128.4,69.7,128.4z M51.5,105.3l18.2,18.2
			l32.4-32.4L84,72.9L51.5,105.3z" />
            </g>
            <g>
                <circle class="st3" cx="43.8" cy="43.5" r="19.3" />
                <path class="st1" d="M43.8,64.8c-11.7,0-21.3-9.6-21.3-21.3s9.6-21.3,21.3-21.3s21.3,9.6,21.3,21.3C65.1,55.3,55.6,64.8,43.8,64.8
			z M43.8,26.2c-9.5,0-17.3,7.8-17.3,17.3s7.8,17.3,17.3,17.3S61.1,53,61.1,43.5S53.4,26.2,43.8,26.2z" />
            </g>
            <g>
                <circle class="st4" cx="40.3" cy="47" r="5.6" />
                <path class="st1" d="M40.3,54.6c-4.2,0-7.6-3.4-7.6-7.6s3.4-7.6,7.6-7.6s7.6,3.4,7.6,7.6C47.9,51.2,44.5,54.6,40.3,54.6z
			 M40.3,43.4c-2,0-3.6,1.6-3.6,3.6s1.6,3.6,3.6,3.6s3.6-1.6,3.6-3.6C43.9,45,42.3,43.4,40.3,43.4z" />
            </g>
            <g>
                <polyline class="st3" points="45.2,25.8 66.7,4.3 84.7,2.6 83.1,20.7 61.6,42.2 		" />
                <path class="st1" d="M61.6,44.2c-0.5,0-1-0.2-1.4-0.6c-0.8-0.8-0.8-2,0-2.8l21-21l1.4-14.9l-15,1.3l-21,21c-0.8,0.8-2,0.8-2.8,0
			s-0.8-2,0-2.8L65.3,2.9c0.3-0.3,0.8-0.5,1.2-0.6l18.1-1.7c0.6-0.1,1.2,0.2,1.6,0.6s0.6,1,0.6,1.6l-1.7,18.1c0,0.5-0.2,0.9-0.6,1.2
			L63,43.6C62.6,44,62.1,44.2,61.6,44.2z" />
            </g>
            <g>
                <line class="st0" x1="55.7" y1="33.3" x2="70.7" y2="18.3" />
                <path class="st1" d="M55.7,35.3c-0.5,0-1-0.2-1.4-0.6c-0.8-0.8-0.8-2,0-2.8l15-15c0.8-0.8,2-0.8,2.8,0s0.8,2,0,2.8l-15,15
			C56.7,35.1,56.2,35.3,55.7,35.3z" />
            </g>
            <g>
                <line class="st0" x1="69.2" y1="14.2" x2="74.6" y2="19.6" />
                <path class="st1" d="M74.6,21.6c-0.5,0-1-0.2-1.4-0.6l-5.4-5.4c-0.8-0.8-0.8-2,0-2.8s2-0.8,2.8,0l5.4,5.4c0.8,0.8,0.8,2,0,2.8
			C75.6,21.4,75.1,21.6,74.6,21.6z" />
            </g>
            <g>
                <line class="st0" x1="64.8" y1="118.3" x2="97.8" y2="85.2" />
                <path class="st1" d="M64.8,120.3c-0.5,0-1-0.2-1.4-0.6c-0.8-0.8-0.8-2,0-2.8l33.1-33.1c0.8-0.8,2-0.8,2.8,0s0.8,2,0,2.8
			l-33.1,33.1C65.8,120.1,65.3,120.3,64.8,120.3z" />
            </g>
        </g>
    </symbol>

    <symbol id="home" viewBox="0 0 128 128">
        <style type="text/css">
            .st0 {
                fill: #6ABA2E;
            }

            .st1 {
                fill: #37474F;
            }

            .st2 {
                fill: #B8D99C;
            }

            .st3 {
                fill: #FFFFFF;
            }

            .st4 {
                fill: none;
            }

            .st5 {
                fill: #FFECB3;
            }

            .orange {
                fill: #d98749;
            }
        </style>
        <g>
            <g>
                <g>
                    <polyline class="st0" points="4.4,59.5 47.2,23 89.9,59.5 			" />
                    <path class="st1" d="M89.9,61.5c-0.5,0-0.9-0.2-1.3-0.5L47.2,25.6L5.7,61c-0.8,0.7-2.1,0.6-2.8-0.2S2.3,58.7,3.1,58l42.8-36.5
				c0.7-0.6,1.8-0.6,2.6,0L91.3,58c0.8,0.7,0.9,2,0.2,2.8C91.1,61.2,90.5,61.5,89.9,61.5z" />
                </g>
                <g>
                    <polyline class="orange" points="78,60 78,106 16,106 16,60 			" />
                    <path class="st1" d="M78,108H16c-1.1,0-2-0.9-2-2V60c0-1.1,0.9-2,2-2s2,0.9,2,2v44h58V60c0-1.1,0.9-2,2-2s2,0.9,2,2v46
				C80,107.1,79.1,108,78,108z" />
                </g>
                <g>
                    <rect x="26" y="74" class="st0" width="19" height="32" />
                    <path class="st1" d="M45,108H26c-1.1,0-2-0.9-2-2V74c0-1.1,0.9-2,2-2h19c1.1,0,2,0.9,2,2v32C47,107.1,46.1,108,45,108z M28,104
				h15V76H28V104z" />
                </g>
                <g>
                    <circle class="st3" cx="61.9" cy="81.6" r="7.9" />
                    <path class="st1" d="M61.9,91.5c-5.5,0-9.9-4.4-9.9-9.9s4.4-9.9,9.9-9.9s9.9,4.4,9.9,9.9S67.4,91.5,61.9,91.5z M61.9,75.7
				c-3.3,0-5.9,2.7-5.9,5.9c0,3.3,2.7,5.9,5.9,5.9c3.2,0,5.9-2.7,5.9-5.9C67.8,78.4,65.2,75.7,61.9,75.7z" />
                </g>
                <g>
                    <line class="st4" x1="62" y1="74" x2="62" y2="88" />
                    <path class="st1" d="M62,90c-1.1,0-2-0.9-2-2V74c0-1.1,0.9-2,2-2s2,0.9,2,2v14C64,89.1,63.1,90,62,90z" />
                </g>
                <g>
                    <line class="st4" x1="69" y1="82" x2="55" y2="82" />
                    <path class="st1" d="M69,84H55c-1.1,0-2-0.9-2-2s0.9-2,2-2h14c1.1,0,2,0.9,2,2S70.1,84,69,84z" />
                </g>
                <g>
                    <polyline class="st5" points="16,48 16,27 26,27 			" />
                    <path class="st1" d="M16,50c-1.1,0-2-0.9-2-2V27c0-1.1,0.9-2,2-2h10c1.1,0,2,0.9,2,2s-0.9,2-2,2h-8v19C18,49.1,17.1,50,16,50z" />
                </g>
            </g>
            <g>
                <line class="st4" x1="5" y1="106" x2="123" y2="106" />
                <path class="st1" d="M123,108H5c-1.1,0-2-0.9-2-2s0.9-2,2-2h118c1.1,0,2,0.9,2,2S124.1,108,123,108z" />
            </g>
            <g>
                <polyline class="st4" points="80,73 91,73 91,89 101,89 101,97 107,97 107,56 118,56 118,94 123,94 123,98 		" />
                <path class="st1" d="M123,100c-1.1,0-2-0.9-2-2v-2h-3c-1.1,0-2-0.9-2-2V58h-7v39c0,1.1-0.9,2-2,2h-6c-1.1,0-2-0.9-2-2v-6h-8
			c-1.1,0-2-0.9-2-2V75h-9c-1.1,0-2-0.9-2-2s0.9-2,2-2h11c1.1,0,2,0.9,2,2v14h8c1.1,0,2,0.9,2,2v6h2V56c0-1.1,0.9-2,2-2h11
			c1.1,0,2,0.9,2,2v36h3c1.1,0,2,0.9,2,2v4C125,99.1,124.1,100,123,100z" />
            </g>
            <g>
                <polyline class="st3" points="5,91 8,91 8,83 14,83 		" />
                <path class="st1" d="M8,93H5c-1.1,0-2-0.9-2-2s0.9-2,2-2h1v-6c0-1.1,0.9-2,2-2h6c1.1,0,2,0.9,2,2s-0.9,2-2,2h-4v6
			C10,92.1,9.1,93,8,93z" />
            </g>
        </g>
    </symbol>


    <symbol id="dancer" viewBox="0 0 694.85 597.05">

        <style type="text/css">
            .st0 {
                fill: #2F2E43;
            }

            .st1 {
                fill: #6AB836;
            }

            .st2 {
                fill: #F3A3A6;
            }

            .st3 {
                fill: #BEE19F;
            }

            .st4 {
                fill: #545454;
            }
        </style>
        <path class="st0" d="M391.4,590.9h-191c-24.9,0-45.1-20.2-45.1-45.1V53.1c0-24.9,20.2-45.1,45.1-45.1h191
	c24.9,0,45.1,20.2,45.1,45.1v492.7C436.5,570.7,416.3,590.9,391.4,590.9L391.4,590.9z" />
        <path class="st1" d="M391.6,578.7H200.2c-18.7,0-33.9-15.2-33.9-33.9V51.3c0-18.7,15.2-33.9,33.9-33.9h191.3
	c18.7,0,33.9,15.2,33.9,33.9v493.6C425.5,563.5,410.3,578.7,391.6,578.7L391.6,578.7z" />
        <path class="st0" d="M325.8,49.5h-60.9c-7,0-12.7-5.7-12.7-12.7s5.7-12.7,12.7-12.7h60.9c7,0,12.7,5.7,12.7,12.7
	S332.8,49.5,325.8,49.5z" />
        <path id="uuid-3fbf081d-9ff2-4e55-8986-b74bb868839d-47-160" class="st2" d="M448.1,322L448.1,322c2.1-2.1,4.7-3.6,7.5-4.4
	l20.7-22.6l10.9,10.5L465,327.3c-1,2.8-2.6,5.3-4.7,7.3c-5.3,5.1-12.3,6.4-15.7,2.9C441.2,334,442.8,327.1,448.1,322L448.1,322
	L448.1,322z" />
        <path class="st3" d="M456.7,311.9l11,13.8l56.8-43l0-0.1l33.2-62c5.1-9.5,2.3-21.3-6.6-27.5c-5.4-3.8-12.1-4.8-18.4-2.9
	c-6.3,1.9-11.3,6.6-13.6,12.7l-21.5,56.4L456.7,311.9L456.7,311.9L456.7,311.9z" />
        <polygon class="st2" points="550.3,168.6 527.1,168.6 527.1,205.3 552.6,196.9 " />
        <path class="st2" d="M504.8,153.3c0,14.1,11.4,25.4,25.4,25.4c14.1,0,25.4-11.4,25.4-25.4c0-14.1-11.4-25.4-25.4-25.4
	C516.2,127.8,504.8,139.2,504.8,153.3z" />
        <path class="st0" d="M548.3,169.5l2.5,4.7l11-20.8c6.6-20.2-16.4-31.8-16.4-31.8c-7.5-8.9-22.6,1.5-22.6,1.5
	c-21.8-4.8-11.3,13.5-11.3,13.5s7.4,0.2,7.4,6.2c0,6,8.1,5.6,8.1,5.6l6.3,11.1l3.5-4.3C549.8,149.8,548.3,169.5,548.3,169.5
	L548.3,169.5z" />
        <rect x="539.1" y="545.1" class="st2" width="20.6" height="29.2" />
        <path class="st0" d="M519.1,591.9c9,0,22.2-0.9,22.3-1c3.5,0.3,21.1,1.7,22-2.3c0.8-3.7-0.4-7.6-0.5-8.1c-1.7-16.8-2.3-17-2.7-17.1
	c-0.6-0.2-2.3,0.7-5.2,2.5l-0.2,0.1l0,0.2c0,0.3-1.3,6.4-7.3,5.5c-4.1-0.6-5.4-1.6-5.8-2c0.3-0.2,0.8-0.4,1.1-0.9
	c0.4-0.7,0.5-1.6,0.2-2.6c-0.8-2.8-3.1-6.9-3.2-7.1l-0.3-0.5l-23.4,15.8l-14.4,4.1c-1.1,0.3-2,1.1-2.4,2.1l0,0
	c-0.6,1.5-0.2,3.1,0.9,4.2c2.6,2.4,7.8,6.4,13.3,6.9C515,591.9,516.9,591.9,519.1,591.9L519.1,591.9L519.1,591.9z" />
        <rect x="594.3" y="504.6" transform="matrix(0.7705 -0.6374 0.6374 0.7705 -192.1917 504.494)" class="st2" width="20.6" height="29.2" />
        <path class="st0" d="M601.8,563.3c6.9-5.8,16.5-14.9,16.6-14.9c2.9-2,17.4-12.1,15.5-15.8c-1.7-3.4-5.1-5.6-5.6-5.9
	c-12-11.9-12.6-11.6-13-11.5c-0.6,0.2-1.4,2-2.4,5.2l-0.1,0.2l0.1,0.2c0.1,0.2,3.1,5.8-2.1,8.9c-3.6,2.1-5.2,2.2-5.8,2.2
	c0.2-0.3,0.3-0.8,0.3-1.4c-0.1-0.8-0.6-1.5-1.5-2.2c-2.4-1.7-6.8-3.4-7-3.5l-0.5-0.2l-8,27l-8.5,12.4c-0.6,0.9-0.8,2.1-0.5,3.2l0,0
	c0.5,1.5,1.8,2.6,3.4,2.6c3.5,0.1,10.1-0.1,14.6-3.2C598.6,565.8,600.1,564.6,601.8,563.3L601.8,563.3L601.8,563.3z" />
        <path class="st0" d="M505.1,320.2l31.3,233h23.5l15.7-233L505.1,320.2L505.1,320.2L505.1,320.2z" />
        <polygon class="st0" points="565.8,447.5 612.6,508.2 592.6,524.8 512.3,448.4 505.1,320.2 519.5,333.1 " />
        <path class="st1" d="M519.5,183.1l-14.4,137.1h70.5l5.5-44.5c3.4-27.5-2.2-55.3-16-79.3l-10.8-18.9L519.5,183.1L519.5,183.1
	L519.5,183.1z" />
        <path id="uuid-6d861307-5b4f-42f9-9fe9-ab52d0b2e64d-48-161" class="st2" d="M513.2,359.2L513.2,359.2c1.1-2.7,2.8-5.2,5-7.1
	l9.5-29.1l14.3,5l-11.1,29c0.3,2.9-0.1,5.9-1.3,8.6c-2.7,6.8-8.6,10.9-13.1,9.2C511.9,372.9,510.5,366,513.2,359.2L513.2,359.2
	L513.2,359.2z" />
        <path class="st3" d="M516.8,346.3l15.7,8l33.9-62.7v-0.1l4.5-70.1c0.7-10.7-6.8-20.3-17.4-22.3c-6.5-1.2-13,0.6-18,5
	c-4.9,4.4-7.5,10.7-7.1,17.2l3.8,60.2L516.8,346.3L516.8,346.3L516.8,346.3z" />
        <circle class="st3" cx="295.2" cy="296" r="108.9" />
        <path class="st0" d="M294.5,407.1c-9.1,0-18.1-1.1-26.9-3.3c-3-0.7-6-1.6-9-2.6c-3.7-1.3-7.3-2.7-10.8-4.3c-2.7-1.3-5.5-2.7-8.2-4.2
	c-2.4-1.4-4.8-2.8-7.1-4.4c-31-20.8-49.4-55.3-49.4-92.5c0-61.4,49.9-111.3,111.3-111.3s111.3,49.9,111.3,111.3
	c0,38-19.1,73-51.2,93.6c-5.6,3.6-11.6,6.8-17.8,9.3c-3.8,1.6-7.8,3-11.8,4.1C315.2,405.7,304.9,407.2,294.5,407.1L294.5,407.1z
	 M294.5,188.4c-59.2,0-107.4,48.2-107.4,107.4c0,35.8,17.8,69.2,47.7,89.2c2.2,1.5,4.5,2.9,6.9,4.2c2.6,1.5,5.3,2.9,7.9,4.1
	c3.3,1.6,6.8,2.9,10.4,4.2c2.8,1,5.7,1.8,8.6,2.5c8.4,2.1,17.1,3.2,25.9,3.2c10,0,19.9-1.4,29.4-4.1c3.9-1.1,7.7-2.4,11.4-4
	c6-2.5,11.8-5.5,17.2-9c30.9-19.9,49.4-53.7,49.4-90.3C401.9,236.6,353.8,188.4,294.5,188.4L294.5,188.4z" />
        <path class="st0" d="M332.6,266.1l-18.9-14.7c0,0-21.6,6.7-22.2,7c-0.6,0.3-33.5,76.7-33.5,76.7s84.4,43.2,78.3,39
	c-6.2-4.2-4.9-61.1,0.8-68.6c5.8-7.4,0.8-26.1,0.8-26.1L332.6,266.1L332.6,266.1L332.6,266.1z" />
        <polygon class="st2" points="280.3,300.5 306,300.5 306,341.2 277.7,331.9 " />
        <path class="st4" d="M336.1,397c-3.8,1.6-7.6,2.9-11.6,4c-9.5,2.7-19.6,4.2-30,4.2c-9.1,0-17.9-1.1-26.4-3.2c-3-0.7-5.9-1.6-8.8-2.6
	c-3.6-1.2-7.2-2.6-10.6-4.2l1.6-8l4.3-21.2l5.1-24.8l0.9-4.7l2.2-11l0-0.1h51.3l0,0.1l13.7,45l5.7,18.9L336.1,397L336.1,397z" />
        <path class="st4" d="M353.6,387.8c-5.5,3.6-11.4,6.6-17.5,9.2c-3.8,1.6-7.6,2.9-11.6,4l-1.9-7.7l-7-29l-9.4-38.9h0c0,0,0.9,0,2.4,0
	c1.4,0,3.4,0,5.7,0.1c5.5,0.2,12.7,0.8,18.4,2.2c4.4,1.1,7.8,2.8,8.8,5.3c1,2.4,5,21.2,10.3,46.5C352.4,382.2,353,384.9,353.6,387.8
	L353.6,387.8z" />
        <circle class="st2" cx="302.4" cy="283.6" r="28.2" />
        <path class="st0" d="M337.6,278.4L337.6,278.4l-6.9,1.2c-0.4-1.5-0.8-2.9-1.2-4.2c-0.5-1.6-1.1-3-1.7-4.2c-1.5-3.2-3.2-5.5-4.9-7
	c-6.5-5.9-13.7-2-14.6-2.2c-1.3-0.3-18.2,18.1-20.4,38.6c-0.2,2.3-0.3,4.6-0.1,6.9c0,0.1,0,0.2,0,0.3c0.5,7-2,12.8-5.6,17.5
	c0,0-0.1,0.1-0.1,0.1c-1.3,1.7-2.7,3.2-4.2,4.6c-4.3,4-9.1,6.9-12.7,8.8c-2.8,1.4-4.8,2.2-5.3,2.4c-0.1,0-0.1,0-0.1,0
	s-4.6,8.6-4.9,24.7c-0.1,6.8,0.4,14.8,2.4,24.2c0.4,1.9,0.9,3.9,1.4,6c0.3,1.1,0.6,2.2,0.8,3.3c-3.6-1.2-7.2-2.6-10.6-4.2
	c-2.7-1.3-5.4-2.6-8-4.1c-2.4-1.3-4.7-2.8-7-4.3c1.2-2.9,2.4-5.3,3.4-7.3c0.7-1.3,1.3-2.4,1.8-3.2c6.2-9.8,2-26.9,2-26.9
	c-9.5-8.4,1.7-26.9,1.7-26.9s-2-24.7,3.9-29.4c5.9-4.8,6.2-16.6,6.2-16.6c10.4-45.2,44.3-36.5,44.3-36.5
	C339.7,235.1,337.7,276.9,337.6,278.4L337.6,278.4z" />
        <path class="st4" d="M285.4,325.5l-1.9,8.3l-2.9,12.8l-10.8,47.6l-1.8,7.8c-3-0.7-5.9-1.6-8.8-2.6c-3.6-1.2-7.2-2.6-10.6-4.2
	c-2.7-1.3-5.4-2.6-8-4.1c0.6-2.8,1.1-5.5,1.7-8.2c5.8-28.3,10.4-49.8,11.5-52.4c1-2.5,4.2-3.9,8.2-4.7c0.3-0.1,0.6-0.1,0.9-0.2
	c0.3,0,0.6-0.1,0.9-0.1c4.7-0.7,10.1-0.6,14.4-0.4c1.5,0.1,2.8,0.2,3.9,0.3c0.6,0,1.2,0.1,1.6,0.1
	C284.8,325.5,285.5,325.5,285.4,325.5L285.4,325.5z" />
        <image style="overflow:visible;" width="300" height="97" xlink:href="https://repdai.test/wp-content/uploads/2023/12/Repdai-logo-gray.png" transform="matrix(0.7361 0 0 0.7361 184.6443 82.4285)">
        </image>
    </symbol>



</svg>



<div class="container-fluid">
    <div class="row">
        <?php foreach ($blocks as $block) : ?>
            <div class="col-12 col-lg-6 mb-3">
                <div class="card mb-3 box-shadow h-100 border-secondary border border-2 bg-light rounded-3">
                    <div class="card-body mb-0 pb-0">
                        <div class="row ps-3 pb-2">
                            <div class="w-25">
                                <img src="<?php echo $block['icon']; ?>">
                            </div>
                            <div class="w-75">
                                <h3 class="  text-end mb-0 text-primary">
                                    <?php echo $block['category']; ?>
                                </h3>
                            </div>
                        </div>
                        <div class="row text-left pt-1 pb-3 mt-0">
                            <?php echo $block['slider']; ?>
                            <?php echo $block['html']; ?>
                        </div>
                        <div class="row text-center m-1">
                            <div>
                                <h4>
                                    <?php echo $block['sub_title']; ?>

                                </h4>
                            </div>
                        </div>
                        <div class="row text-center text-dark mx-0 mb-0 pb-0">
                            <p>
                                <?php echo $block['description']; ?>

                            </p>
                        </div>
                        <div class="row mb-0  justify-content-center">
                            <a href="<?php echo $block['cta_link']; ?>" role="button" class="w-100 btn btn-sm btn-secondary text-white" type="submit" style=" max-width:175px;">
                                <?php echo $block['cta_text']; ?>
                            </a>
                        </div>

                    </div>

                </div>
            </div>

        <?php endforeach; ?>

    </div>

</div>