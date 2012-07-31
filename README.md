iSiriPanel
==========

Setup a control panel on your iDevices for your siriServers --By <a href="www.twitter.com/rabih96">@Rabih96</a>
------------------------------------------------------------------------------------------------------------------------
**Things you will need:**
* Ubuntu 10.04 and above
* iFile on your iDevice or OpenSSH
* A running Google API server from <a href="https://github.com/Eichhoernchen/SiriServerCore">Eichhoernchen / SiriServerCore</a>
* Few knowledge in Php/Html and deb/cydia if you want to make your app a deb file to intall throw iFile
* Internet connection :P

**Step 1**:

1. Download the files above as zip
2. Extract the zip file
3. Now you need to put some passords to ssh into your Server root
4. In `master.php``master.php` replace `YOUR_PASSWORD` with your ssh pass for your server
5. Then in `start.php`, `stop.php` and `restart.php` replace `YOUR_PASSWORD` by the same password you used in `master.php`</li>
