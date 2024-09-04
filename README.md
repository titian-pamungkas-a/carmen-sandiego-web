# Website Admin Carmen Sandiego

Game Carmen Sandiego: Indonesia dapat diakses melalui [LINK INI](https://github.com/titian-pamungkas-a/carmensidgame).

Website Carmen Sandiego: Indonesia adalah website admin yang digunakan untuk mengatur semua data permainan pada Carmen Sandiego: Indonesia. Website mengirim data pada game melalui REST API berupa kumpulan data dalam bentuk JSON setiap kali game meminta request.

Terdapat beberapa data yang dapat diedit oleh admin sebagai bagian dari permainan, diantaranya adalah:
- Kota
- Atribute Kota
- Graph antar kota
- Detail Fixed Level
- Detail Random Level
- Penjahat
- Log User

Setiap data tersebut dapat dilakukan operasi CRUD (kecuali log user yang hanya bisa dilihat karena terupdate otomatis saat game dijalankan). Game melakukan request data permainan setiap kali game dijalankan dan update data pada website dapat diakses secara realtime. Artinya, setiap kali data pada website diupdate maka data permainan juga akan terupdate setiap kali permainan dijalankan. 

## Halaman Login

![image](https://github.com/user-attachments/assets/d5f0e515-a006-444f-8d7f-5ad467e87dc4)


## Kota 

![image](https://github.com/user-attachments/assets/1a965f7b-6a8e-4631-985b-bed95bd8de6c)


## Atribute

![image](https://github.com/user-attachments/assets/0acb3615-710f-46a1-b9d4-2b3e9b3328f2)


## Level Fixed

![image](https://github.com/user-attachments/assets/980cb117-8825-4bf7-8459-05b22fdac279)


## Level Random

![image](https://github.com/user-attachments/assets/e685288f-2a55-4213-8510-ce10ecb5cefa)


## Log User

![image](https://github.com/user-attachments/assets/aa29133d-c117-4a87-b2a0-5d3942871782)
