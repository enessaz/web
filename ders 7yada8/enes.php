<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">




<div class="container-fluid  ">        
         <div class="form-group bg-secondary  ">
           <form class="col-md-4 offset-md-4 " action="hoca.php" method="POST">
            <h3 class="text-center" style="color:#C0C0C0;"> <small> <b>İletişim Formu</b></small> </h3>
             
             <label> Ad</label>
             <input type="text" name="ad" placeholder="Adını Giriniz"  class="form-control" required="">
             <label > Soyad</label>
             <input type="text" name="soyad" placeholder="Soyadınızı Giriniz"  class="form-control" required=""  >
             <label > Email</label>
             <input type="text" name="email" placeholder="Email Adresinizi Giriniz" class="form-control" required="">
             <label > Telefon Numarası</label>
             <input type="number" name="tlfn" placeholder="Bu Alanın Doldurulması Zorunlu Değildir" class="form-control">
             <label >Hizmetler</label>
             <select name="hizmetler" class="form-control ">
               <option >Seo Hizmetleri</option>
               <option >Web Tasarımı</option>
               <option >Logo,Afiş Tasarımı</option>

             </select>
             <label for="">Açıklama</label>
             <textarea  required="" name="aciklama" id="" cols="30" rows="10" class="form-control" ></textarea>
             <br>
             <input type="submit" name="button">
           
                    </div>
                </div>
              </div>
               
            </div>
             
           </form>
          </div>
         </div>