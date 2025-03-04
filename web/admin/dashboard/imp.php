
<div class="container-fluid pt-4 px-4" style="display:none;" id="important-file">
    <div class="bg-secondary rounded-top p-4" id="encoded-content">
       
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
       
        const encodedName = "TUUgUkVIVQ=="; 
        const encodedInstagram = "aHR0cHM6Ly93d3cuaW5zdGFncmFtLmNvbS8uX21tcmVodQ==";
        const encodedOwner = "UmVodSBUYWx3YXI=";

        const decodedName = atob(encodedName);
        const decodedInstagram = atob(encodedInstagram);
        const decodedOwner = atob(encodedOwner);

        const content = `
            <div class="row">
                <div class="col-12 col-sm-6 text-center text-sm-start">
                    © <a href="#">${decodedName}</a>, All Right Reserved.
                </div>
                <div class="col-12 col-sm-6 text-center text-sm-end">
                    Designed By <a href="${decodedInstagram}">${decodedName}</a>
                    <br>Owned By: <a href="${decodedInstagram}" target="_blank">${decodedOwner}</a>
                </div>
            </div>
        `;

      
        document.getElementById("encoded-content").innerHTML = content;

      
        setTimeout(() => {
            document.getElementById("important-file").style.display = "block"; 
        }, 2000);

        const originalContent = document.getElementById("encoded-content").innerHTML;

        setInterval(() => {
            const currentContent = document.getElementById("encoded-content").innerHTML;
            if (currentContent !== originalContent) {
                alert("Unauthorized modification detected! Redirecting...");
                window.location.href = "https://www.instagram.com/_.mmrehu/";
            }
        }, 1000);
    });
</script>
