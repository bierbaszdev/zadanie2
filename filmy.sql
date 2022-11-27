CREATE DATABASE filmy;
use filmy;

create table filmy(
    id int(10) unsigned not null,
    rodzaj int(10) unsigned not null,
    tytul VARCHAR(90),
    ocena int(5),
    opis VARCHAR(250)
);


insert into filmy (rodzaj ,tytul ,ocena ,opis) VALUES
(8, 'Interstellar', 5 ,'Byt ludzkości na Ziemi dobiega końca wskutek zmian klimatycznych. Grupa naukowców odkrywa tunel czasoprzestrzenny, który umożliwia poszukiwanie nowego domu.'),
(5, 'Skazani na Shawshank', 5, 'Adaptacja opowiadania Stephena Kinga. Niesłusznie skazany na dożywocie bankier, stara się przetrwać w brutalnym, więziennym świecie.'),
(5, 'OJCIEC CHRZESTNY', 5,'Opowieść o nowojorskiej rodzinie mafijnej. Starzejący się Don Corleone pragnie przekazać władzę swojemu synowi.');


