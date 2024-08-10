    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/js/intlTelInput.min.js"
        crossorigin="anonymous"></script>
    <script src="//code.tidio.co/sdzqyzkqyjktbhjlcr0v8xbgipvxwtc9.js"></script>

    <script>
        // Function to handle the close event for a specific toast
        function closeToast(event) {
            const button = event.target;  // Get the button that was clicked
            const toast = button.closest('#toast-default');  // Find the closest toast element
            if (toast) {
                toast.remove();  // Remove the toast from the DOM
            }
        }

        // Get all close buttons within toasts
        const closeButtons = document.querySelectorAll('#toast-default button[data-dismiss-target="#toast-default"]');

        // Add a click event listener to each close button
        closeButtons.forEach(button => {
            button.addEventListener('click', closeToast);
        });
    </script>

    {{-- <script>
        document.addEventListener('DOMContentLoaded', function () {
            const tabs = document.querySelectorAll('[role="tab"]');
            const tabPanels = document.querySelectorAll('[role="tabpanel"]');
            let currentTabIndex = 0;
            let intervalId;
    
            function showTab(index) {
                tabs.forEach((tab, i) => {
                    if (i === index) {
                        tab.setAttribute('aria-selected', 'true');
                        tab.classList.add('border-gray-300', 'text-blue-600');
                    } else {
                        tab.setAttribute('aria-selected', 'false');
                        tab.classList.remove('border-gray-300', 'text-gray-600');
                    }
                });
                tabPanels.forEach((panel, i) => {
                    panel.classList.toggle('hidden', i !== index);
                });
            }
    
            function startTabRotation() {
                intervalId = setInterval(() => {
                    currentTabIndex = (currentTabIndex + 1) % tabs.length;
                    showTab(currentTabIndex);
                }, 3000);
            }
    
            function stopTabRotation() {
                clearInterval(intervalId);
            }
    
            tabs.forEach((tab, index) => {
                tab.addEventListener('click', () => {
                    stopTabRotation();
                    showTab(index);
                    currentTabIndex = index;
                    startTabRotation();
                });
                tab.addEventListener('mouseover', stopTabRotation);
                tab.addEventListener('mouseout', startTabRotation);
            });
    
            showTab(currentTabIndex);
            startTabRotation();
        });
    </script> --}}

    {{-- auto tab --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const tabs = document.querySelectorAll('[role="tab"]');
            const tabPanels = document.querySelectorAll('[role="tabpanel"]');
            let currentTabIndex = 0;
            let intervalId;
    
            function showTab(index) {
                tabs.forEach((tab, i) => {
                    if (i === index) {
                        tab.setAttribute('aria-selected', 'true');
                        tab.classList.add('border-blue-700', 'text-blue-500','border-b-2');
                        tab.classList.remove('text-gray-500', 'border-transparent');
                    } else {
                        tab.setAttribute('aria-selected', 'false');
                        tab.classList.remove('border-blue-500', 'text-blue-500','border-b-2');
                        tab.classList.add('text-gray-500', 'border-transparent');
                    }
                });
                tabPanels.forEach((panel, i) => {
                    panel.classList.toggle('hidden', i !== index);
                });
            }
    
            function startTabRotation() {
                intervalId = setInterval(() => {
                    currentTabIndex = (currentTabIndex + 1) % tabs.length;
                    showTab(currentTabIndex);
                }, 30000); // 30 seconds
            }
    
            function stopTabRotation() {
                clearInterval(intervalId);
            }
    
            tabs.forEach((tab, index) => {
                tab.addEventListener('click', () => {
                    stopTabRotation();
                    showTab(index);
                    currentTabIndex = index;
                    startTabRotation();
                });
                tab.addEventListener('mouseover', stopTabRotation);
                tab.addEventListener('mouseout', startTabRotation);
            });
    
            showTab(currentTabIndex);
            startTabRotation();
        });
    </script>
    

    {{-- Ajax Call For Product ] --}}
    <script>
        $(document).ready(function() {
            $('#importButton').click(function() {
                $.ajax({
                    url: "{{ url('/usa-import-data/import') }}",
                    type: 'GET',
                    success: function(data) {
                        alert(results);
                        // var tableBody = $('#dataBody');
                        // tableBody.empty(); // Clear existing data
                        // $.each(data, function(index, item) {
                        //     tableBody.append('<tr><td>' + item.id + '</td><td>' + item.name + '</td><td>' + item.email + '</td></tr>');
                        // });
                    }
                });
            });

            // $('#searchInput').on('keyup', function() {
            //     var value = $(this).val().toLowerCase();
            //     $("#dataBody tr").filter(function() {
            //         $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            //     });
            // });
        });
    </script>

    {{-- Recaptcha Response --}}
    <script>
        function onSubmit(token) {
            document.getElementById("contact-form").submit();
        }
    </script>

    {{-- Map Js --}}
    <script type="text/javascript">
        var map = AmCharts.makeChart("mapdiv", {
            type: "map",
            theme: "light",
            panEventsEnabled: true,
            backgroundColor: "#ffff",
            backgroundAlpha: 1,
            zoomControl: {
                zoomControlEnabled: false
            },
            dataProvider: {
                map: "usaHigh",
                getAreasFromMap: true,
                areas: []
            },
            areasSettings: {
                autoZoom: true,
                color: "#ffff",
                colorSolid: "#0A3161",
                selectedColor: "#0A3161",
                outlineColor: "#666666",
                rollOverColor: "#0A3161",
                rollOverOutlineColor: "#000000"
            }
        });
    </script>

    {{-- Key point Counting Js  --}}
    <script type="text/JavaScript">
        let count = document.querySelectorAll(".count")
        let arr = Array.from(count)

            arr.map(function(item){
            let startnumber = 0

            function counterup(){
            startnumber++
            item.innerHTML= startnumber
            
            if(startnumber == item.dataset.number){
                clearInterval(stop)
            }
        }

        let stop =setInterval(function(){
            counterup()
        },50)

        })
    </script>

    {{-- Background Connecting js --}}
    <script>
        var canvasContainer = document.getElementById("canvas-container"),
            canvas = document.getElementById("canvas"),
            ctx = canvas.getContext('2d');

        function resizeCanvas() {
            canvas.width = canvasContainer.clientWidth;
            canvas.height = canvasContainer.clientHeight;
        }

        window.addEventListener('resize', resizeCanvas);
        resizeCanvas(); // Initial call to set the canvas size

        var stars = [], // Array that contains the stars
            FPS = 60, // Frames per second
            x = 100, // Number of stars
            mouse = {
                x: 0,
                y: 0
            }; // mouse location

        // Push stars to array
        for (var i = 0; i < x; i++) {
            stars.push({
                x: Math.random() * canvas.width,
                y: Math.random() * canvas.height,
                radius: Math.random() * 1 + 1,
                vx: Math.floor(Math.random() * 50) - 25,
                vy: Math.floor(Math.random() * 50) - 25
            });
        }

        // Draw the scene
        function draw() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            ctx.globalCompositeOperation = "lighter";

            for (var i = 0, x = stars.length; i < x; i++) {
                var s = stars[i];

                ctx.fillStyle = "#f1f1f1";
                ctx.beginPath();
                ctx.arc(s.x, s.y, s.radius, 0, 2 * Math.PI);
                ctx.fill();
                ctx.fillStyle = 'black';
                ctx.stroke();
            }

            ctx.beginPath();
            for (var i = 0, x = stars.length; i < x; i++) {
                var starI = stars[i];
                ctx.moveTo(starI.x, starI.y);
                if (distance(mouse, starI) < 150) ctx.lineTo(mouse.x, mouse.y);
                for (var j = 0, x = stars.length; j < x; j++) {
                    var starII = stars[j];
                    if (distance(starI, starII) < 150) {
                        ctx.lineTo(starII.x, starII.y);
                    }
                }
            }
            ctx.lineWidth = 0.05;
            ctx.strokeStyle = 'white';
            ctx.stroke();
        }

        function distance(point1, point2) {
            var xs = 0;
            var ys = 0;

            xs = point2.x - point1.x;
            xs = xs * xs;

            ys = point2.y - point1.y;
            ys = ys * ys;

            return Math.sqrt(xs + ys);
        }

        // Update star locations
        function update() {
            for (var i = 0, x = stars.length; i < x; i++) {
                var s = stars[i];

                s.x += s.vx / FPS;
                s.y += s.vy / FPS;

                if (s.x < 0 || s.x > canvas.width) s.vx = -s.vx;
                if (s.y < 0 || s.y > canvas.height) s.vy = -s.vy;
            }
        }

        canvas.addEventListener('mousemove', function(e) {
            var rect = canvas.getBoundingClientRect();
            mouse.x = e.clientX - rect.left;
            mouse.y = e.clientY - rect.top;
        });

        // Update and draw
        function tick() {
            draw();
            update();
            requestAnimationFrame(tick);
        }

        tick();
    </script>
    {{-- <script>
        var canvasContainer = document.getElementById("canvas-container"),
        canvasDiv = document.getElementById("canvas"),
        canvas = document.createElement("canvas"),
        ctx = canvas.getContext('2d');

        canvasDiv.appendChild(canvas);

        function resizeCanvas() {
            canvas.width = canvasContainer.offsetWidth;
            canvas.height = canvasContainer.offsetHeight;
        }

        window.addEventListener('resize', resizeCanvas);
        resizeCanvas(); // Initial call to set the canvas size

        var stars = [], // Array that contains the stars
            FPS = 60, // Frames per second
            x = 100, // Number of stars
            mouse = {
                x: 0,
                y: 0
            }; // mouse location

        // Push stars to array
        for (var i = 0; i < x; i++) {
            stars.push({
                x: Math.random() * canvas.width,
                y: Math.random() * canvas.height,
                radius: Math.random() * 1 + 1,
                vx: Math.floor(Math.random() * 50) - 25,
                vy: Math.floor(Math.random() * 50) - 25
            });
        }

        // Draw the scene
        function draw() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            ctx.globalCompositeOperation = "lighter";

            for (var i = 0, x = stars.length; i < x; i++) {
                var s = stars[i];

                ctx.fillStyle = "#f1f1f1";
                ctx.beginPath();
                ctx.arc(s.x, s.y, s.radius, 0, 2 * Math.PI);
                ctx.fill();
                ctx.fillStyle = 'black';
                ctx.stroke();
            }

            ctx.beginPath();
            for (var i = 0, x = stars.length; i < x; i++) {
                var starI = stars[i];
                ctx.moveTo(starI.x, starI.y);
                if (distance(mouse, starI) < 150) ctx.lineTo(mouse.x, mouse.y);
                for (var j = 0, x = stars.length; j < x; j++) {
                    var starII = stars[j];
                    if (distance(starI, starII) < 150) {
                        ctx.lineTo(starII.x, starII.y);
                    }
                }
            }
            ctx.lineWidth = 0.05;
            ctx.strokeStyle = 'white';
            ctx.stroke();
        }

        function distance(point1, point2) {
            var xs = 0;
            var ys = 0;

            xs = point2.x - point1.x;
            xs = xs * xs;

            ys = point2.y - point1.y;
            ys = ys * ys;

            return Math.sqrt(xs + ys);
        }

        // Update star locations
        function update() {
            for (var i = 0, x = stars.length; i < x; i++) {
                var s = stars[i];

                s.x += s.vx / FPS;
                s.y += s.vy / FPS;

                if (s.x < 0 || s.x > canvas.width) s.vx = -s.vx;
                if (s.y < 0 || s.y > canvas.height) s.vy = -s.vy;
            }
        }

        canvas.addEventListener('mousemove', function(e) {
            var rect = canvas.getBoundingClientRect();
            mouse.x = e.clientX - rect.left;
            mouse.y = e.clientY - rect.top;
        });

        // Update and draw
        function tick() {
            draw();
            update();
            requestAnimationFrame(tick);
        }

        tick();

    </script> --}}

    {{-- Contact Us page phone selection input js --}}
    <script>
        var telInput = $("#phone"),
            errorMsg = $("#error-msg"),
            validMsg = $("#valid-msg");

        // initialise plugin
        telInput.intlTelInput({
            allowExtensions: true,
            formatOnDisplay: true,
            autoFormat: true,
            autoHideDialCode: true,
            autoPlaceholder: true,
            defaultCountry: "us",
            ipinfoToken: "yolo",
            nationalMode: false,
            numberType: "MOBILE",
            //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            preferredCountries: ['sa', 'ae', 'qa', 'om', 'bh', 'kw', 'ma'],
            preventInvalidNumbers: true,
            separateDialCode: true,
            initialCountry: "us",
            geoIpLookup: function(callback) {
                $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "";
                    callback(countryCode);
                });
            },
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"
        });

        var reset = function() {
            telInput.removeClass("error");
            errorMsg.addClass("hide");
            validMsg.addClass("hide");
        };

        // on blur: validate
        telInput.blur(function() {
            reset();
            if ($.trim(telInput.val())) {
                if (telInput.intlTelInput("isValidNumber")) {
                    validMsg.removeClass("hide");
                } else {
                    telInput.addClass("error");
                    errorMsg.removeClass("hide");
                }
            }
        });

        // on keyup / change flag: reset
        telInput.on("keyup change", reset);

        function getPhoneNumberData() {
            var fullNumber = telInput.intlTelInput("getNumber"); // Get the full number with ISD code

            console.log("Full Number: ", fullNumber);

            // Remove existing hidden input field if present
            $("#contact-form input[name='full_phone']").remove();

            // Append hidden input field with the full phone number
            $("<input>").attr({
                type: "hidden",
                name: "full_phone",
                value: fullNumber
            }).appendTo("#contact-form");
        }

        // Handle form submission
        $("#contact-form").submit(function(event) {
            getPhoneNumberData();
        });
    </script>

    {{-- Footer phone selection input js --}}
    <script>
        var telInput = $("#phone-cf"),
            errorMsg = $("#error-msg"),
            validMsg = $("#valid-msg");

        // initialise plugin
        telInput.intlTelInput({
            allowExtensions: true,
            formatOnDisplay: true,
            autoFormat: true,
            autoHideDialCode: true,
            autoPlaceholder: true,
            defaultCountry: "us",
            ipinfoToken: "yolo",
            nationalMode: false,
            numberType: "MOBILE",
            //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            preferredCountries: ['sa', 'ae', 'qa', 'om', 'bh', 'kw', 'ma'],
            preventInvalidNumbers: true,
            separateDialCode: true,
            initialCountry: "us",
            geoIpLookup: function(callback) {
                $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "";
                    callback(countryCode);
                });
            },
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"
        });

        var reset = function() {
            telInput.removeClass("error");
            errorMsg.addClass("hide");
            validMsg.addClass("hide");
        };

        // on blur: validate
        telInput.blur(function() {
            reset();
            if ($.trim(telInput.val())) {
                if (telInput.intlTelInput("isValidNumber")) {
                    validMsg.removeClass("hide");
                } else {
                    telInput.addClass("error");
                    errorMsg.removeClass("hide");
                }
            }
        });

        // on keyup / change flag: reset
        telInput.on("keyup change", reset);

        function getPhoneNumberData() {
            var fullNumber = telInput.intlTelInput("getNumber"); // Get the full number with ISD code

            console.log("Full Number: ", fullNumber);

            // Remove existing hidden input field if present
            $("#contact-form input[name='full_phone']").remove();

            // Append hidden input field with the full phone number
            $("<input>").attr({
                type: "hidden",
                name: "full_phone",
                value: fullNumber
            }).appendTo("#contact-form");
        }

        // Handle form submission
        $("#contact-form").submit(function(event) {
            getPhoneNumberData();
        });
    </script>
    
    {{-- Active class --}}
    <script>
        // Import button 
        function handleimport() {
            const importbtn = document.getElementById("import-btn");
            const exporttab = document.getElementById("export-data");
            // const importtab = document.getElementById("import-btn");
            // const exportbtn = document.getElementById("export-btn");

            if (importtab.style.display === 'none') {
                exporttab.style.display === 'none'
                importtab.style.display === 'block'
                importtab.style.display === 'block';
                // importtab.classList.add('active-main');
                // exportbtn.classList.remove('active-main');
            } else {
                importtab.style.display === 'none'
            }
        }

        function handleExport() {
            const importtab = document.getElementById("import");
            const exporttab = document.getElementById("export");
            // const importtab = document.getElementById("import-btn");
            // const exportbtn = document.getElementById("export-btn");

            if (exporttab.style.display === 'none') {
                exporttab.style.display === 'block'
                importtab.style.display === 'none'
                // exporttab.classList.add('active-main');
                // importbtn.classList.remove('active-main');
            } else {
                exporttab.style.display === 'none'
            }
        }

        function handleProductWise() {
            // console.log('Button Clicked Product');
            const productWiseDiv = document.getElementById('profile');
            const companyWiseDiv = document.getElementById('dashboard');
            const productWiseCompanyDiv = document.getElementById('productwise');
            const productbtn = document.getElementById('profile-tab');
            const companybtn = document.getElementById('dashboard-tab');
            const productWisebtn = document.getElementById('productwise-tab');

            productWiseDiv.style.display = "block";
            companyWiseDiv.style.display = "none";
            productWiseCompanyDiv.style.display = "none";
            productbtn.classList.add('active');
            companybtn.classList.remove('active');
            productWisebtn.classList.remove('active');
        }

        function handleCompanyWise() {
            // console.log('Button Clicked Company');
            const productWiseDiv = document.getElementById('profile');
            const companyWiseDiv = document.getElementById('dashboard');
            const productWiseCompanyDiv = document.getElementById('productwise');
            const productbtn = document.getElementById('profile-tab');
            const companybtn = document.getElementById('dashboard-tab');
            const productWisebtn = document.getElementById('productwise-tab');


            productWiseDiv.style.display = "none";
            companyWiseDiv.style.display = "block";
            productWiseCompanyDiv.style.display = "none";
            companybtn.classList.add('active');
            productbtn.classList.remove('active');
            productWisebtn.classList.remove('active');
        }

        function handleProductWiseCompany() {
            // console.log('Button Clicked Product Wise Company');
            const productWiseDiv = document.getElementById('profile');
            const companyWiseDiv = document.getElementById('dashboard');
            const productWiseCompanyDiv = document.getElementById('productwise');
            const productbtn = document.getElementById('profile-tab');
            const companybtn = document.getElementById('dashboard-tab');
            const productWisebtn = document.getElementById('productwise-tab');

            productWiseDiv.style.display = "none";
            companyWiseDiv.style.display = "none";
            productWiseCompanyDiv.style.display = "block";
            companybtn.classList.remove('active');
            productbtn.classList.remove('active');
            productWisebtn.classList.add('active');
        }
    </script>
    {{-- Filter Unloading port --}}
    <script>
        document.getElementById('large').addEventListener('change', async function() {
            var selectedOption = this.options[this.selectedIndex].value;
            window.location.href = selectedOption;
        });
    </script>
    <script>
        document.getElementById('large-1').addEventListener('change', async function() {
            var selectedOption = this.options[this.selectedIndex].value;
            window.location.href = selectedOption;
        });
    </script>
    <script>
        document.getElementById('large-2').addEventListener('change', async function() {
            var selectedOption = this.options[this.selectedIndex].value;
            window.location.href = selectedOption;
        });
    </script>
