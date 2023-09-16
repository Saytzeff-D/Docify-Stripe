<!DOCTYPE html>
<html lang="en">
<head>
<style>
    body {            
        background-color: #F3F4F4 !important;
        font-family: 'Poppins', sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
    .cursor-pointer {
        cursor: pointer;
    }
    .text-dark-new {
        color: #343843 !important
    }
    .text-template {
        color: #15ACD7 !important;
    }
    .btn-template {
        background-color: #15ACD7 !important;
    }
    .doc-page {
        max-height: 500px; /* Adjust the maximum height as needed */
        overflow: auto;
    }
    ::-webkit-scrollbar {
        width: 5px;
    }
    ::-webkit-scrollbar-thumb {
        background: #15ACD7;
        border-radius: 10px;
    }
    ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 10px;
    }
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Docify | Rental Agreement</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.5.3/signature_pad.min.js"></script>
     
</head>
<body>
    <?php
        $city = 'Ogbomoso';
        $date=date("Y-m-d");
    ?>
    <div class="container py-5 animate__animated animate__fadeIn animate__slow">
        <div>
            <p class="text-template fs-4 fw-bold">Room Rental Agreement</p>
        </div>        
        <div class="w-100 mt-3">
            <div class="progress" style="height: 20px">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark fw-bold" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" id="progress-bar" style="width: 25%">11%</div>
            </div>
        </div>      
        <div class="row mx-auto w-100">
            <div class="col-md-4 py-2">
    <div class="bg-white p-4">
        
        <!-- The content you want to print goes here -->
        <!-- It should include all the information collected in your form steps -->
    
        <form id="multiStepForm" action="checkout.php" method="POST">
            <div class="step" id="step1">
                <p class="text-dark fs-5 fw-bold">Step 1: LandLord Full Name?</p>
                <input type="text" name="landlordname"  id="landlordName" class="form-control bg-white" required />
                <div class="pt-3">
                    <button type="button" class="btn btn-template rounded-0 border-0 fw-bold" disabled>Prev</button>
                    <button type="button" class="btn btn-template rounded-0 border-0 fw-bold" onclick="nextStep('step1', 'step2')"  id="b1" disabled>Next</button>
                </div>
            </div>

            <div class="step" id="step2" style="display:none;">
                <p class="text-dark fs-5 fw-bold">Step 2: Landlord Address ?</p>
                <input type="text" name="landlordemail"  id="landlordAddress" class="form-control bg-white" required />
                <div class="pt-3">
                    <button type="button" class="btn btn-template rounded-0 border-0 fw-bold" id="landlordAddress" onclick="prevStep('step2', 'step1')">Prev</button>
                    <button type="button" class="btn btn-template rounded-0 border-0 fw-bold" onclick="nextStep('step2', 'step3')" disabled id="b2">Next</button>
                </div>
            </div>
            <div class="step" id="step3" style="display:none">
                <p class="text-dark fs-5 fw-bold">Step 3: LandLord Tax Identification Number ?</p>
                <input type="text" name="identification_number" id="landlordtaxidentification" class="form-control bg-white" required />
                <div class="pt-3">
                    <button type="button" class="btn btn-template rounded-0 border-0 fw-bold" onclick="prevStep('step3', 'step2')">Prev</button>
                   <button type="button" class="btn btn-template rounded-0 border-0 fw-bold" onclick="nextStep('step3', 'step4')" disabled id="b3">Next</button>
                </div>
            </div>
            <div class="step" id="step4" style="display:none">
                <p class="text-dark fs-5 fw-bold">Step 4: Tenant Name ?</p>
                <input type="text" name="tenantname" id="tenantName" class="form-control bg-white" required />
                <div class="pt-3">
                    <button type="button" class="btn btn-template rounded-0 border-0 fw-bold" onclick="prevStep('step4', 'step3')">Prev</button>
                    <button type="button" class="btn btn-template rounded-0 border-0 fw-bold" onclick="nextStep('step4', 'step5')" disabled id="b4">Next</button>
                </div>
            </div>
            <div class="step" id="step5" style="display:none">
                <p class="text-dark fs-5 fw-bold">Step 5: Tenant Address ?</p>
                <input type="text" name="tenantemail" id="tenantAddress" class="form-control bg-white" required />
                <div class="pt-3">
                    <button type="button" class="btn btn-template rounded-0 border-0 fw-bold" onclick="prevStep('step5', 'step4')">Prev</button>
                    <button type="button" class="btn btn-template rounded-0 border-0 fw-bold" onclick="nextStep('step5', 'step6')" disabled id="b5">Next</button>
                </div>
            </div>
             <div class="step" id="step6" style="display:none">
                <p class="text-dark fs-5 fw-bold">Step 6: Tenant Identification Number ?</p>
                <input type="text" name="taxidentification" id="tenanttaxidentification" class="form-control bg-white" required />
                <div class="pt-3">
                    <button type="button" class="btn btn-template rounded-0 border-0 fw-bold" onclick="prevStep('step6', 'step5')">Prev</button>
                    <button type="button" class="btn btn-template rounded-0 border-0 fw-bold" onclick="nextStep('step6', 'step7')" disabled id="b6">Next</button>
                </div>
            </div>
             <div class="step" id="step7" style="display:none">
                <p class="text-dark fs-5 fw-bold">Step 7: Start Date & End Date ?</p>
                <label>Start Date</label>
                <input type="date" name="startdate" id="sdate" value="" placeholder="Enter Start Date"><br><br>
                <label>End Date</label>
                 <input type="date" name="enddate" id="edate" value="" placeholder="Enter End Date">
               
                <div class="pt-3">
                    <button type="button" class="btn btn-template rounded-0 border-0 fw-bold" onclick="prevStep('step7', 'step6')">Prev</button>
                    <button type="button" class="btn btn-template rounded-0 border-0 fw-bold" onclick="nextStep('step7', 'step8')" disabled id="b7">Next</button>
                </div>
            </div>
             <div class="step" id="step8" style="display:none">
                <p class="text-dark fs-5 fw-bold">Step 8: Enter Monthly Rent ?</p>
                <label>$ Enter Amount </label>
                <input type="number" name="amount" id="amount" placeholder="Enter Amount">
                <div class="pt-3">
                    <button type="button" class="btn btn-template rounded-0 border-0 fw-bold" onclick="prevStep('step8', 'step7')">Prev</button>
                    <button type="button" class="btn btn-template rounded-0 border-0 fw-bold" onclick="nextStep('step8', 'step9')" disabled id="b8">Next</button>
                </div>
            </div>
            <div class="step" id="step9" style="display:none">
                <p class="text-dark fs-5 fw-bold">Step 9: Enter Security Deposit ?</p>
                <label>$ Enter Security Deposit </label>
                <input type="number" name="deposit" id="deposit" placeholder="Enter Security Deposit">
                <div class="pt-3">
                    <button type="button" class="btn btn-template rounded-0 border-0 fw-bold" onclick="prevStep('step9', 'step8')">Prev</button>
                    <button type="button" class="btn btn-template rounded-0 border-0 fw-bold" onclick="prevStep('step9', 'step10')" disabled id="b9">Next</button>
                </div>
            </div>
            <div class="step" id="step10" style="display:none">
                <input type="hidden" id="signatureData" name="signatureData" value="">
                <p class="text-dark fs-5 fw-bold">Step 10: Sign the Agreement of Tenant</p>
                <div id="signature-pad">
                    <canvas id="signatureCanvas"  width="300" height="200"></canvas>
                </div>
                <button type="button" class="btn btn-template rounded-0 border-0 fw-bold" onclick="prevStep('step10', 'step9')">Prev</button>
                 <button type="button" class="btn btn-template rounded-0 border-0 fw-bold" onclick="saveSignature()">Next</button>
            </div>
            <div class="step" id="step11" style="display:none">
                <input type="hidden" id="signatureData" name="signatureData" value="">
                <p class="text-dark fs-5 fw-bold">Step 11: Submit Data</p>
                <button type="button" class="btn btn-template rounded-0 border-0 fw-bold" onclick="prevStep('step10', 'step11')">Prev</button>
                 <button type="submit" name="submit" class="btn btn-template rounded-0 border-0 fw-bold">Submit</button>
            </div>
        </form>
    </div>
</div>
<div class="col-md-8 py-2 doc-page">
    <div class="bg-white overflow-auto p-4">
        <div id="printContent">
        <p class="text-center fw-bold">ROOM RENTAL AGREEMENT</p>

        <p class="fw-bold">Parties</p>

        <p>This Room Rental Agreement ("Agreement") is entered into in <i><?php echo $city ?></i>, on <?php echo $date; ?>, between:</p>

        
        <p>Landlord's Name: <span id="landlordnamevalue">[Landlord's Name]</span></p>
        <p>Landlord's Address:<span id="landlordaddressvalue">[Landlord's Address]</span> </p>
        <p>Landlord's Tax Identification Number:<span id="taxidentification"> [Landlord's NIF/CIF] </span></p>

      
        <p>Tenant's Name: <span id="tenantnamevalue">[Tenant Name]</span></p>
        <p>Tenant's Address: <span id="tenantaddressvalue">[Tenant's Address]</span></p>
        <p >Tenant's Tax Identification Number: <span id="taxidentification2">[Tenant's NIF/CIF]</span></p>

        <p>Purpose of the Agreement</p>

        <p>The Landlord leases a room in the dwelling located at [<?php echo  $city;  ?>] , under the following conditions:</p>

        <p>Duration of the Lease</p>

        <p>The lease term shall be [Number of months/years] commencing on <span id="svalue">[Start Date]</span> and ending on <span id="evalue">[End Date]</span></p>

        <p>Rent</p>

        <p>The Tenant agrees to pay a monthly rent of [<span id="amountvalue">Amount</span>] euros (€), to be paid within the first [Day] days of each month. The agreed payment method is [Payment Method].</p>

        <p>Security Deposit</p>

        <p>The Tenant shall provide the Landlord with a security deposit equivalent to [<span id="depositvalue">Amount</span>] euros (€) at the time of signing this agreement. The deposit will be refunded at the end of the contract, deducting costs for damages or unpaid rent.</p>

        <p>Use of Common Areas</p>

        <p>The Tenant shall have the right to use the common areas of the Dwelling, including [Specify available common areas such as kitchen, bathroom, living room, etc.].</p>

        <p>Landlord's Obligations</p>

        <p>The Landlord agrees to maintain the Dwelling in suitable conditions for habitation and to make necessary repairs to ensure proper functioning of facilities and services.</p>

        <p>Tenant's Obligations</p>

        <p>The Tenant agrees to use the room and common areas of the Dwelling reasonably and respectfully of the rights of other tenants or individuals living in the Dwelling.</p>

        <p>Termination of the Agreement</p>

        <p>Either party may terminate this Agreement by providing written notice to the other party with [Number of days] days' notice.</p>

        <p>Applicable Law and Jurisdiction</p>

        <p>This Agreement shall be governed and interpreted in accordance with the laws of [Applicable Jurisdiction].</p>

        <p>Any dispute related to this Agreement shall be subject to the exclusive jurisdiction of the courts of <?php echo $city; ?></p>

        <p>Signatures of the Parties</p>

        <p>The parties have executed this Room Rental Agreement on the date mentioned above.</p>

        <p>By the Tenant:</p>

       <p>Signature: <span id="sign1">_______________________________</span></p>
        <p>Printed Name: <span id="name1">___________________________</span></p>
        <p>Date: <?php echo date("Y-m-d"); ?></p>

        <!--<p>By the Tenant:</p>

        <p>Signature:<span id="sign2"> _______________________________</span></p>
        <p>Printed Name:<span id="name2"> __________________________</span></p>
        <p>Date: <?php echo date("Y-m-d"); ?></p>-->
       </div>
    </div>
</div>
        </div>  
    </div>
    <script type="text/javascript" >
        const clickMe = (e)=>{
            console.log(e.target.value)
        }
    </script>

<script>
    let currentStep = 1;
    const totalSteps = 11; // Set the total number of steps
      // Function to update the displayed value for each range slider

    function updateSliderValue(sliderId, displayId) {
        const slider = document.getElementById(sliderId);
        const display = document.getElementById(displayId);
        display.textContent = slider.value;
    }
    function nextStep(currentStepId, nextStepId) {
         
       const currentStep = document.getElementById(currentStepId);
        const nextStep = document.getElementById(nextStepId);

        currentStep.style.display = "none";
        nextStep.style.display = "block";

        // Update progress bar
        updateProgressBar(nextStepId);
    }
     // Function to go to the previous step
    function prevStep(currentStepId, prevStepId) {
        const currentStep = document.getElementById(currentStepId);
        const prevStep = document.getElementById(prevStepId);

        currentStep.style.display = "none";
        prevStep.style.display = "block";

        // Update progress bar
        updateProgressBar(prevStepId);
    }

    // Function to update the progress bar based on the current step
    function updateProgressBar(stepId) {
        const progressBar = document.getElementById("progress-bar");
        const steps = ["step1", "step2", "step3", "step4", "step5","step6","step7","step8","step9","step10","step11"];
        const currentStepIndex = steps.indexOf(stepId);
        const totalSteps = steps.length;
        const progressPercentage = ((currentStepIndex + 1) / totalSteps) * 100;
        progressBar.style.width = progressPercentage + "%";
        progressBar.textContent = progressPercentage.toFixed(0) + "%";
    }

    
    // Display the first step initially and update the progress bar
    document.getElementById("step1").style.display = "block";
    updateProgressBar("step1");

    


    // Function to update Landlord's Name in the span element and highlight it
    function updateLandlordName() {
        const landlordNameInput = document.getElementById("landlordName");
        const landlordNameSpan = document.getElementById("landlordNameValue");

        landlordNameSpan.textContent = landlordNameInput.value;
        landlordNameSpan.style.backgroundColor = "yellow"; // Highlight the text
    }
    // Add event listener to the input field to update the Landlord's Name
    document.getElementById("landlordName").addEventListener("input", updateLandlordName);
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#landlordName").on("input",function(){
            var val=$(this).val();
            if(val!=""){
                $("#b1").attr("disabled",false);
                $("#landlordnamevalue").css('backgroundColor','#FCC831');
                $("#landlordnamevalue").html(val);  
                $("#name1").css('backgroundColor','#FCC831');
                $("#name1").html(val);    
            }else{
                $("#b1").attr("disabled",true);
            }
        });
         $("#landlordAddress").on("input",function(){
            var val=$(this).val();
            if(val!=""){
                $("#b2").attr("disabled",false);
                $("#landlordaddressvalue").html(val);
                $("#landlordaddressvalue").css('backgroundColor','#FCC831');
            }else{
                $("#b2").attr("disabled",true);
            }
           
        });
          $("#landlordtaxidentification").on("input",function(){
            var val=$(this).val();
             if(val!=""){
                $("#b3").attr("disabled",false);
                $("#taxidentification").html(val);
                $("#taxidentification").css('backgroundColor','#FCC831');
             }else{
                 $("#b3").attr("disabled",true);
             }
        });
        $("#tenantName").on("input",function(){
            var val=$(this).val();
             if(val!=""){
                $("#b4").attr("disabled",false);
                $("#tenantnamevalue").css('backgroundColor','#FCC831');
                $("#tenantnamevalue").html(val);
                 $("#name2").css('backgroundColor','#FCC831');
                $("#name2").html(val);  
            }else{
                $("#b4").attr("disabled",true);
            }
            
        });
         $("#tenantAddress").on("input",function(){
            var val=$(this).val();
            if(val!=""){
                $("#b5").attr("disabled",false);
                $("#tenantaddressvalue").html(val);
                $("#tenantaddressvalue").css('backgroundColor','#FCC831');
            }else{
                 $("#b5").attr("disabled",true);
            }
            
        });
          $("#tenanttaxidentification").on("input",function(){
            var val=$(this).val();
              if(val!=""){
                 $("#b6").attr("disabled",false);
                 $("#taxidentification2").html(val);
                  $("#taxidentification2").css('backgroundColor','#FCC831');
              }else{
                $("#b6").attr("disabled",true);
              }
            
        });
        $("#sdate").on("change",function(){
            var val=$(this).val();
            if(val!=""){
                  $("#b7").attr("disabled",false);
                $("#svalue").html(val);
                $("#svalue").css('backgroundColor','#FCC831');
                const element = document.getElementById("svalue");
                element.scrollIntoView({ behavior: "smooth" }); // Smooth scrolling to the element
            }else{
                $("#b7").attr("disabled",true);
            }
        });
        $("#edate").on("change",function(){
            var val=$(this).val();
            if(val!=""){
                $("#b8").attr("disabled",false);
                $("#evalue").html(val);
                $("#evalue").css('backgroundColor','#FCC831');
                 const element = document.getElementById("evalue");
                element.scrollIntoView({ behavior: "smooth" }); // Smooth scrolling to the element
            }else{
                $("#b8").attr("disabled",true);
            }
            
        });
        $("#amount").on("input",function(){
            var val=$(this).val();
            if(val!=""){
                $("#b9").attr("disabled",false);
                $("#amountvalue").html(val);
                $("#amountvalue").css('backgroundColor','#FCC831');
                const element = document.getElementById("amountvalue");
                element.scrollIntoView({ behavior: "smooth" }); // Smooth scrolling to the element
            }else{
                $("#b9").attr("disabled",true);
            }
        });
        $("#deposit").on("input",function(){
            var val=$(this).val();
            if(val!=""){
                $("#b10").attr("disabled",false);
                $("#depositvalue").html(val);
                $("#depositvalue").css('backgroundColor','#FCC831');
                const element = document.getElementById("depositvalue");
                element.scrollIntoView({ behavior: "smooth" }); // Smooth scrolling to the element
            }else{
                $("#b10").attr("disabled",true);
            }
            
        });
    });
</script>
<script type="text/javascript">
   
    function printPreview() {
    // Create a new window for the print preview
    const printWindow = window.open('', '_blank');

    // Write the content you want to print to the new window
    const contentToPrint = document.getElementById('printContent').innerHTML;
    printWindow.document.open();
    printWindow.document.write('<html><head><title>Print Preview</title></head><body>');
    printWindow.document.write(contentToPrint);
    printWindow.document.write('</body></html>');
    printWindow.document.close();

    // Call the print function on the new window
    printWindow.print();
    printWindow.close();
}  
</script>
<script>
    const signaturePad = new SignaturePad(document.getElementById('signatureCanvas'), {
        backgroundColor: 'white',
        penColor: 'black'
    });

    // Function to enable the "Next" button once a signature is added
    function enableNextButton() {
        const nextButton = document.getElementById('b10');
        nextButton.disabled = !signaturePad.isEmpty();
    }

    // Function to save the signature as an image and update the <span>

function saveSignature() {
    if (!signaturePad.isEmpty()) {
        const signatureData = signaturePad.toDataURL();
        // Display the saved signature as an image in the <span>
        const signatureImage = document.createElement('img');
        signatureImage.src = signatureData;
        signatureImage.width = 200; // Set the desired width
        signatureImage.height = 100; // Set the desired height

        // Replace the content of the <span> with the signature image
        const signatureSpan = document.getElementById('sign1');
        signatureSpan.innerHTML = ''; // Clear any existing content
        signatureSpan.appendChild(signatureImage);

        // Disable further editing of the signature
        signaturePad.off();
        const element = document.getElementById("sign1");
        element.scrollIntoView({ behavior: "smooth" }); // Smooth scrolling to the element
        // Move to the next step (step 11) after saving the signature
        nextStep('step10', 'step11');
    }
}

</script>
</body>
</html>