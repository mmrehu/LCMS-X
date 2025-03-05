# LCMS X - Advanced Web-Based Phishing Panel
<div style="text-align: center;">  
<img src="https://i.ibb.co/844cmhJP/LCMS-X.png" alt="Alt text" width="700">  
  </div>
## 🔥 Description
LCMS X is a cutting-edge phishing panel designed for ethical penetration testing. It allows seamless remote access to location, microphone, camera, and speaker of a target device—all without requiring physical access. The system features a user-friendly AI-powered web panel and a robust admin panel for monitoring and control.

## 🚀 Features
- **📍 Location Tracking** – Real-time GPS data retrieval.
- **🎤 Microphone Access** – Capture and stream live audio.
- **📷 Camera Access** – Take pictures or record videos.
- **🔊 Speaker Control** – Play remote audio on the target’s device.
- **🧠 AI-Powered Web Panel** – Smooth and efficient user interface.
- **🛠 Admin Panel** – Manage users, logs, and system settings.
- **🎯 One-Link Exploit** – Gain access by simply sending a link.
- **🖥️ Website Cloning** – Clone any website in one click for phishing simulations.

## 🛠 Installation Guide
### Prerequisites
- A web server (Apache/Nginx)
- PHP 7.4+ with required extensions

- **Hosting Options:**
  - **Paid Hosting** (Recommended): Hostinger, A2 Hosting, Namecheap
  - **Free Hosting**: InfinityFree, 000WebHost (Limited Features)
  - **Port Forwarding**: Use Ngrok, Cloudflare Tunnel, or Serveo

### Setup Instructions
1. **Upload the `web` directory** to your hosting panel or VPS.
2. **Configure your database**:
   - Open `config.php` and set your database credentials.
3. **Set proper permissions**:
   ```bash
   chmod -R 755 web/
   ```
4. **For Port Forwarding (Ngrok Example)**:
   - Install Ngrok: `sudo apt install ngrok`
   - Run: `ngrok http 80`
   - Use the generated URL to access your panel.
5. **Access Your Panel**:
   - User Panel: `yourdomain.com`
   - Admin Panel: `yourdomain.com/admin`

## 🎯 How to Use
1. **Login** to the **Admin Panel** and manage targets.
2. **Generate & send a phishing link**.
3. **Monitor real-time data** (location, mic, camera, etc.).
4. **Clone any website with one click** for phishing simulations.
5. **Control and analyze logs** within the panel.

## 🔒 License & Restrictions
- LCMS X is **NOT open-source**. Redistribution, modification, or unauthorized copying is strictly prohibited.
- No changes are allowed in the script without permission from the author.
- Any unauthorized use will be subject to legal action.

## ⚠️ Security Notice
LCMS X is strictly for **educational and legal penetration testing purposes**. Unauthorized use is illegal and punishable by law.

## 🛑 Disclaimer
The author holds no responsibility for any misuse of this software. Ensure responsible use.

## 📩 Contact
For any issues, reach out via Instagram: **[_mmrehu](https://www.instagram.com/_mmrehu/)** or email at **mmrangers9@gmail.com**.
