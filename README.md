# weloop-watchface-serverlike

Simple CMS-like server for own watchfaces for Goclever Chronos Eko and Weloop Tommy in PHP and HTML


## Usage

Put all files on WWW server, change $URL in watch.php and index.html to correct domain and create "uploads" folder

### Prerequisites

```
Any web server with PHP 
```


## Preparing modified version of app

* Unpacking app by [Apktool](https://ibotpeaches.github.io/Apktool/) 
```
java -jar apktool d [name of apk]
```
* Modifying address of server  
```
on Chronos app (in weloop probably in similar place) in 
[name of apk]\smali\com\yf\weloop\activities\SendDialActivity$13.smali in 107 line
to "http://[domain]/watch.php"
```
* Packing app 
```
java -jar apktool b [name of folder]
```
* signing apk
```
Find on google how (sorry)
```

## Uses

[Bootstrap](https://getbootstrap.com/)

[JQuery](https://jquery.com/)
## Authors

* **Grzegorz M** - *Creator* - [weloop-watchface-serverlike](https://github.com/grzesjam/weloop-watchface-serverlike)

See also the list of [contributors](https://github.com/grzesjam/weloop-watchface-serverlike/graphs/contributors) who participated in this project.

## License

This project is licensed under the **MIT License**
- see the [LICENSE](LICENSE) file for details
