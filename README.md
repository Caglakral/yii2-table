


# Yetkililerle İletişim Kurma Modülü

Bu modül sayesinde kullanıcıların yetkililerle iletişim kurması sağlanmaktadır.


# Kurulum

Modül kurulumu için portal klasöründe bulunan composer.json'da 
 
 		
       "minimum-stability": "dev", //Minimum stabilityi dev olarak güncelliyoruz
       
       ........
        
 		{
        //repostories kısmına bu kodu ekliyoruz
            "type": "vcs",
            "url": "https://github.com/esincaglakiral/yii2-table.git"
        }

	   ........


     {         
     	//require kısmına bu kodu ekliyoruz
        
          "esincagkakiral/table": "dev-master"
   	 
     }
     
---------
composer.jsondaki işlemlerden sonra Back-end için portal\backend\config altında bulunan main.php dosyasına aşağıdaki kodu ekliyoruz.
	
    'projemodulu' => [
            'class' => 'esincaglakiral\table\Module',
        ],
        
Daha sonra Front-End için ise portal\frontend\config altında bulunan main.php dosyasına aşağıdaki kodu ekliyoruz.
	
    'projemodulu' => [
            'class' => 'esincaglakiral\table\Module',
        ],
---------
Kurulum
============

Sırasıyla aşağıdaki yazılımlar kurulmalı ve github token üretilmelidir.

1. [VirtualBox](https://www.virtualbox.org/wiki/Downloads)
2. [Vagrant](https://www.vagrantup.com/downloads.html)
3. [Git](https://www.git-scm.com)
4. [GitHub API token](https://github.com/settings/tokens) Generate new token'a tıklayarak yeni bir token oluşturulmalıdır. 
5. Yönetici yetkileriyle terminal (komut satırı) açılarak aşağıdaki direktifler uygulanmalıdır.
   
```bash
vagrant plugin install vagrant-hostmanager
git clone https://github.com/kouosl/portalium-kickstarter.git portalium
git clone https://github.com/kouosl/vagrant-portalium.git vagrant-portalium
```

6. Aşağıdaki dizinde bulunan vagrant-local.example.yml dosyasının vagrant-local.yml adıyla kopyası oluşturulmalıdır. 
```
@vagrant-portal/config 
```

7. GitHub api tokenı `vagrant-local.yml` dosyasında aşağıdaki şekilde tanımlanmalıdır.
```
....
github_token: 5027e142c8096b33307229c5ffdf57816cbeef49
....
```

8. Vagrant makina çalıştırılarak kurulum başlatlır. Komut vagrant-portal dizininin içinde çalıştırılmalıdır.
```bash
vagrant up
```

Terminal'den (komut satırı) sanal makinaya SSH erişimi için;
```bash
vagrant ssh
```
   
Hariçi bir programla (putty vb.) ssh bağlantısı için bilgiler;
* ip : 192.168.83.137
* user : vagrant
* password : vagrant

Private key ile bağlatı için;
```bash
ssh -i .vagrant/machines/portalium/virtualbox/private_key vagrant@portalium
```

Vagrant çalıştırıldıktan sonra vagrant ssh ile sanal makinaya bağlanıp 
cd/var/www/portal komutu çalıştırılıp composer update edilmeli.Daha sonra migration işlemleri için 

php yii migrate --migrationPath=@vendor/webgece/table/migrations

komutu yazılarak migration işlemi gerçekleştirilmeli.Bu işlemlerin ardından modül kurulumunu tamamlamış oluyoruz.

# Modülün Yapısı ve Kullanımı
Modül, front-end kısmı içerisinde kullanıcının yetkililerle iletişim kuracağı bir iletişim formu bulundurmaktadır. 

Kullanıcı bu form alanını kullanarak yetkililere iletmek istediği mesajı kullanıcı ID'si, adı, soyadı, maili ve mesajını girerek iletmektedir. Bu kullanıcı iletiyi 'Gönder' butonuna bastıktan sonra bu mesaj veritabanına işlemektedir.

Geçmiş kullanıcı mesajları yine front-end üzerinden görüntülenmektedir.

Backend tarafında admin ise mesajları görüntüleme, güncelleme, silme işlemlerini gerçekleştirebilmektedir.

