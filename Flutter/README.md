# Flutter

Flutter is Google's mobile app SDK for crafting high-quality native interfaces on iOS and Android in record time. Flutter works with existing code, is used by developers and organizations around the world, and is free and open source.

## Getting started

To get started with flutter, you need a few things. You need to downlaod the Flutter SDK from [here](https://flutter.dev/docs/get-started/install) and follow the step by step paths as shown. If the path isn't set up correctly, then the command line interface for Flutter won't work.

### Useful commands

* Flutter Doctor - this command checks to see if you have everything needed to start developing an app with flutter.

```console
foo@bar:~$ flutter doctor
```

* Create App - this command is used to create a boilerplate app using dart and flutter. The parameter used is the app name. App names can't contain spaces nor '-'. Instead an underscore is used.

```console
foo@bar:~$ flutter create app_name
```

* Flutter Run - this command is used to run the flutter application on your device. You can reload the application by pressing 'r' or a hard reload with 'shift + r' or 'R'.

```console
foo@bar:~$ flutter run
```

### Android studio

Once installed, android studio can be configured to create flutter apps. You can use android studio to create a virtual android device with which to use your application. You can run multiple instances to allow for using the xcode simulator for an iPhone while using the android studio simulator for an android device. When using two devices at once, the same code serves both applications.

### Useful links

* [Flutter documentation](https://flutter.dev/docs) - good source for information on how to use Flutter.

* [Flutter community](https://flutter.dev/community) - excellent source for getting help with flutter available on reddit, discord, slack... along with flutter meetups near you.
