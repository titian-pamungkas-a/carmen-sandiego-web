# Website Admin Carmen Sandiego

Game Carmen Sandiego: Indonesia dapat diakses melalui [LINK INI](https://github.com/titian-pamungkas-a/carmensidgame).

Website Carmen Sandiego: Indonesia adalah website admin yang digunakan untuk mengatur semua data permainan pada Carmen Sandiego: Indonesia. Website mengirim data pada game melalui REST API berupa kumpulan data dalam bentuk JSON setiap kali game meminta request.

Terdapat beberapa data yang dapat diedit oleh admin sebagai bagian dari permainan, diantaranya adalah:
- Kota dan masing-masing atribut
- Graph antar kota
- Detail Fixed Level
- Detail Random Level
- Penjahat
- Log User

Game melakukan request data permainan setiap kali game dijalankan dan update data pada website dapat diakses secara realtime. Artinya, setiap kali data pada website diupdate maka data permainan juga akan terupdate setiap kali permainan dijalankan. 
