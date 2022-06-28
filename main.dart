// ignore_for_file: deprecated_member_use, prefer_const_constructors

import 'package:flutter/material.dart';

void main() {
  runApp(const MyApp());
}



class MyApp extends StatelessWidget {
  const MyApp({Key? key}) : super(key: key);


  // This widget is the root of your application.
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'やるじゃん！',
      theme: ThemeData.dark(
      ),

      home: const MyHomePage(title: 'やるぜ！ へようこそ！'),

    );

  }
}

class MyHomePage extends StatefulWidget {
  const MyHomePage({Key? key, required this.title}) : super(key: key);
  final String title;
  @override
  State<MyHomePage> createState() => _MyHomePageState();
}

class _MyHomePageState extends State<MyHomePage> {
  final _textControllerA = TextEditingController();
  final _textControllerB = TextEditingController();
  final _textControllerC = TextEditingController();
  final _textControllerD = TextEditingController();
  final _textControllerE = TextEditingController();



  int a = 0;
  int b = 0;
  int c = 0;
  int d = 0;
  int e = 0;
  int f = 0;
  int g = 0;
  int h = 0;
  int i = 0;
  int j = 0;


  @override
  void initState() {
    super.initState();
  }

  @override
  void dispose() {
    super.dispose();
  }


  @override
  Widget build(BuildContext context) {
    return Scaffold(
        resizeToAvoidBottomInset: false,
      appBar: AppBar(
        title: Text('やるじゃん！'),
        backgroundColor: Colors.black,
      ),
      
      body: Center(

        child: Column(


          children: <Widget>[

            Padding(
              padding: const EdgeInsets.all(5),
              child: TextField(

                controller: _textControllerA,
                keyboardType: TextInputType.number,
                decoration: const InputDecoration(
                  border: OutlineInputBorder(),
                  labelText: '1局',
                ),
                onChanged: (text) { // ★
                  setState(() {
                    a = int.tryParse(text) ?? 0;
                  });
                },
              ),
            ),

            Padding(
              padding: const EdgeInsets.all(5),
              child: TextField(
                controller: _textControllerB,
                keyboardType: TextInputType.number,
                decoration: const InputDecoration(
                  border: OutlineInputBorder(),
                  labelText: '2局',
                ),
                onChanged: (text) { // ★
                  setState(() {
                    b = int.tryParse(text) ?? 0;
                  });
                },
              ),
            ),
            Padding(
              padding: const EdgeInsets.all(5),
              child: TextField(
                controller: _textControllerC,
                keyboardType: TextInputType.number,
                decoration: const InputDecoration(
                  border: OutlineInputBorder(),
                  labelText: '3局',
                ),
                onChanged: (text) { // ★
                  setState(() {
                    c = int.tryParse(text) ?? 0;
                  });
                },
              ),
            ),
            Padding(
              padding: const EdgeInsets.all(5),
              child: TextField(
                controller: _textControllerD,
                keyboardType: TextInputType.number,
                decoration: const InputDecoration(
                  border: OutlineInputBorder(),
                  labelText: '4局',
                ),
                onChanged: (text) { // ★
                  setState(() {
                    d = int.tryParse(text) ?? 0;
                  });
                },
              ),
            ),
            Padding(
              padding: const EdgeInsets.all(5),
              child: TextField(
                controller: _textControllerE,
                keyboardType: TextInputType.number,
                decoration: const InputDecoration(
                  border: OutlineInputBorder(),
                  labelText: '5局',
                ),
                onChanged: (text) { // ★
                  setState(() {
                    e = int.tryParse(text) ?? 0;
                  });
                },
              ),
            ),



            ButtonBar(
              alignment: MainAxisAlignment.center,
              children: [
               ElevatedButton(
                child: const Text('計算！'),
                 onPressed: () {
                  setState(() {
                    h = a + b + c + d + e + f + g;

                    h = a + b + c + d + e + f + g;
                    i = h * 3;

                    h = a + b + c + d + e + f + g;
                    j = h * 5;
                  });
                  },
               ),

              ],
            ),

            Text(
              "\n合計！$h\n\n点３！$i\n\n点５！$j",
              style: const TextStyle(
                fontSize:20,
              ),
            ),


          ],
        ),
      ),
    );
  }
}
