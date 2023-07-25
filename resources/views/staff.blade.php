@extends('layout')

@section('content')
<style>
      
  .image {
    opacity: 1;
    display: block;
    width: 100%;
    height: auto;
    transition: .5s ease;
    backface-visibility: hidden;
  }
  
  .middle {
    transition: .5s ease;
    opacity: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    text-align: center;
  }
  
  .card:hover .image {
    opacity: 0.3;
  }
  
  .card:hover .middle {
    opacity: 1;
  }
  
  .text {
    background-color: #a40606;
    color: white;
    font-size: 16px;
    padding: 16px 32px;
  }

  .card{
      height:350px;
      margin-bottom:30px;
    }

</style>
<div class="row">
    <div class="container">
        <div class="col-6" style="font-family: 'Quicksand', sans-serif;">
            <h1 class="text-danger text-center mt-3 pt-3" style="font-size: 40px;"><b>ADMINISTRATION</b></h1>
        </div>
    </div>
</div>
<!-- About Principal of School -->
<div class="row">
    <div class="container">
        <div class="col-12" style="margin-top: 50px; margin-bottom: 20px;" >
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <div class="container card">
                        <img class="rounded img-fluid mx-auto image" src="../assets/img/schoolproprietor.jpg" style = "width500px; height:700px;" />
                        <div class="middle">
                            <div class="text rounded">
                            Rev Fr. Collins Anoka
                                <p>School Proprietor</p>
                            </div>
                            
                          </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-7">
                    <div style="padding-left: 40px; padding-right: 20px; font-size: 16px;">
                        
                        <h3 style = "color:#4A0404;"><b>SCHOOL ADMINISTRATION</b></h3>
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        Sankt Georg International School has a well-structured administration that ensures effective management 
                        and smooth operation of the institution. The administration of Sankt Georg International School 
                        aims to create a functional family-like atmosphere where every member has a designated role. 
                        This structure enables effective representation, seamless service delivery, prompt responses to issues, 
                        and efficient implementation of resolutions. The administration's collaborative approach ensures that 
                        the diverse needs of students, parents, and staff are met while maintaining a high standard of education 
                        and a supportive school environment.
                        The administration can be divided into two main categories: 
                        The Management Board and The Staff Members.         
                        </p>
                        <h3 style = "color:#4A0404;"><b>Management Board</b></h3>

                        <h5 style="color:#4A0404; font-family: 'Quicksand', sans-serif;"><b>Head Teachers: </b></h5>  
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        The management board includes the head teachers of the primary and 
                        secondary sections. They are responsible for overseeing the academic programs, 
                        curriculum development, and overall educational standards of their respective sections.          
                        </p>

                        <h5 style="color:#4A0404; font-family: 'Quicksand', sans-serif;"><b>School Administrator: </b></h5>  
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        The school administrator plays a crucial role in coordinating various 
                        administrative tasks. They manage day-to-day operations, handle logistics, ensure compliance 
                        with regulations, and provide support to both staff and students.         
                        </p>

                        <h5 style="color:#4A0404; font-family: 'Quicksand', sans-serif;"><b>School Manager:</b></h5>  
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                         The school manager oversees the overall administration of the school. 
                        They are responsible for budget management, resource allocation, facility maintenance, 
                        and strategic planning to enhance the school's performance.         
                        </p>

                        <h5 style="color:#4A0404; font-family: 'Quicksand', sans-serif;"><b>Hostel Administrators:</b></h5>  
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                         If Sankt Georg International School has boarding facilities, 
                        the hostel administrators are in charge of managing the hostels. 
                        They ensure the well-being and safety of the boarding students, handle dormitory operations, 
                        and address any concerns related to boarding facilities.         
                        </p>

                        <h5 style="color:#4A0404; font-family: 'Quicksand', sans-serif;"><b>Parent-Teacher Association (PTA) Representative: </b></h5>  
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        The PTA representative acts as a liaison between 
                        the school administration and the parents. They facilitate communication, organize events, and 
                        address parental concerns or suggestions.        
                        </p>

                        <h5 style="color:#4A0404; font-family: 'Quicksand', sans-serif;"><b>Head Boy/Girl: </b></h5>  
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        The head boy or girl is a student representative who may be included in the management board. 
                        They provide student perspectives, voice student concerns, and participate in decision-making processes.         
                        </p>

                        
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
                    <div style="padding-left: 40px; padding-right: 20px; font-size: 16px;">
        <h3 style = "color:#4A0404;"><b>Staff Members</b></h3> </br>
        <h5 style="color:#4A0404; font-family: 'Quicksand', sans-serif;"><b>Teachers:</b></h5>         
                        
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        The teaching staff are responsible for delivering high-quality education to students. 
                        They plan and conduct lessons, assess student progress, provide guidance and support, 
                        and collaborate with colleagues and administrators to ensure effective teaching and learning.                   
                        </p>

                        <h5 style="color:#4A0404; font-family: 'Quicksand', sans-serif;"><b>Support Teachers:</b></h5> 
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        Support teachers work alongside regular teachers to provide additional assistance to students 
                        with special educational needs or learning challenges. They offer personalized support, modify teaching methods, 
                        and collaborate with teachers and parents to create an inclusive learning environment.                   
                        </p>

                        <h5 style="color:#4A0404; font-family: 'Quicksand', sans-serif;"><b>Security Personnel: </b></h5>     
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        The security team ensures the safety and security of students, staff, and the school premises. 
                        They monitor access, implement safety protocols, respond to emergencies, and maintain a secure environment.                  
                        </p>

                        <h5 style="color:#4A0404; font-family: 'Quicksand', sans-serif;"><b>Drivers: </b></h5>     
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        School drivers are responsible for transporting students to and from school, ensuring their safety during the commute. 
                        They follow designated routes, adhere to traffic regulations, and maintain a safe and comfortable transportation experience for students.                  
                        </p>

                        <h5 style="color:#4A0404; font-family: 'Quicksand', sans-serif; font-size:18px;"><b>Kitchen Staff: </b></h5>     
                        <p style="text-align: justify; font-family: 'Quicksand', sans-serif;">
                        The kitchen staff manage the school's cafeteria and food services. They plan and prepare nutritious meals, 
                        maintain food hygiene standards, cater to dietary requirements, and ensure a healthy and pleasant dining experience for students and staff.                   
                        </p>
                        </div>
                        </div>
    </div>
</div>
<!-- end of about Principal of School-->




<div class="row">
    <div class="container" style="font-family: 'Quicksand', sans-serif; margin-left: 20px; margin-top: 50px;">
            <h2 class="text-danger" style="padding-left:40px; font-size:35px;"><b>School Managment Team</b></h2>
    </div>
</div>

<!-- About Principal of School -->
<div class="row">
    <div class="container-fluid">
        <div class="col-12" style="margin-top: 20px; margin-bottom: 20px;" >
            <div class="row d-flex flex-row">
            <div class="col-sm-12 col-md-3"  >

<div class="card">
    
        <img class="rounded img-fluid mx-auto image" style="height:220px ; width:200px;" src="../assets/img/schoolproprietor.jpg" />
        <div class="middle">
            <div class="text rounded">
            
                <p>School Proprietor</p>
            </div>
            
        </div>

    <div class="card-body text-center">
        <h5 class="card-title"><b>Rev Fr. Collins Anoka</b></h5>
        
      </div>
</div>
</div>

<div class="col-sm-12 col-md-3"  >

<div class="card">
    
        <img class="rounded img-fluid mx-auto image" style="height:220px ; width:200px;" src="../assets/img/schoolprincipal.jpg" />
        <div class="middle">
            <div class="text rounded">
            
                <p>School Principal</p>
            </div>
            
        </div>

    <div class="card-body text-center">
        <h5 class="card-title"><b>Mr. Jonathan O. Onwumere</b></h5>
        
      </div>
</div>
</div>

                
                <div class="col-sm-12 col-md-3"  >

                    <div class="card">
                        
                            <img class="rounded img-fluid mx-auto image" style="height:220px ; width:200px;" src="../assets/img/primaryHeadTeacher.png" />
                            <div class="middle">
                                <div class="text rounded">
                                
                                    <p>Head Teacher (Primary)</p>
                                </div>
                                
                            </div>
                    
                        <div class="card-body text-center">
                            <h5 class="card-title"><b>Mrs. Josephine Kelechi Onyenwe</b></h5>
                            
                          </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-3"  >

                    <div class="card">
                        
                            <img class="rounded img-fluid mx-auto image" style="height:220px ; width:200px;" src="../assets/img/schoolmanager.jpg" />
                            <div class="middle">
                                <div class="text rounded">
                                    <p>School Manager</p>
                                </div>
                                
                            </div>
                    
                        <div class="card-body text-center">
                        <h5 class="card-title"><b>Mrs. Angela Ezeuiro</b></h5>
                        <h6> NCE, ISC/CHEM, Adeniran College of Education, Ijanikin, Lagos.
                            B.Ed, Educational Management, University of Ado-Ekiti, Ekiti State. </h6>

                            
                          </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3"  >

                    <div class="card">
                        
                            <img class="rounded img-fluid mx-auto image" style="height:220px ; width:200px;" src="../assets/img/hosteladmin1.jpg" />
                            <div class="middle">
                                <div class="text rounded">
                                    
                                    <p>Hostel Administrator</p>
                                </div>
                                
                            </div>
                    
                        <div class="card-body text-center">
                        <h5 class="card-title"><b>Sr. Prisca Echefu FMDC</b></h5>
                            
                          </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-3"  >

                    <div class="card">
                        
                            <img class="rounded img-fluid mx-auto image" style="height:220px ; width:200px;" src="../assets/img/hosteladmin2.jpg" />
                            <div class="middle">
                                <div class="text rounded">
                                   
                                    <p>Hostel Administrator</p>
                                </div>
                                
                            </div>
                    
                        <div class="card-body text-center">
                            <h5 class="card-title"><b>Sr. Patience Yakanu</b></h5>
                            
                          </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-3"  >

<div class="card">
    
        <img class="rounded img-fluid mx-auto image" style="height:220px ; width:200px;" src="../assets/img/chika.jpg" />
        <div class="middle">
            <div class="text rounded">
               
                <p>Administrative Secretary</p>
            </div>
            
        </div>

    <div class="card-body text-center">
        <h5 class="card-title"><b>Mrs. Chika Okorie </b></h5>
        <h6> BSc. Accounting  </h6>
      </div>
</div>
</div>



        

            </div>
        </div>
    </div>
</div>





 <div class="row">
    <div class="container" style="font-family: 'Quicksand', sans-serif; margin-left: 20px;">
            <h2 class="text-danger" style="padding-left:40px; font-size:35px;"><b>Staff Members</b></h2>
    </div>
</div> 

 <div class="row">
    <div class="container-fluid">
        <div class="col-12" style="margin-top: 20px; margin-bottom: 20px;" >
          
            <div class="row d-flex flex-row">
                <div class="col-sm-12 col-md-3"  >

                    <div class="card">
                        
                    <img class="rounded img-fluid mx-auto image" style="height:220px ; width:200px;" src="../assets/img/julia.jpg" />
                            
                    
                        <div class="card-body text-center">
                            <h5 class="card-title"><b>Nwachukwu Julia Soromtochim</b></h5>
                            <p class="card-text">N.C.E Biology/Health Education, ED/Biology 
                            </p>
                          </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3"  >

                    <div class="card">
                        
                    <img class="rounded img-fluid mx-auto image" style="height:220px ; width:200px;" src="../assets/img/doris.jpg" />
                           
                    <div class="card-body text-center">
                            <h5 class="card-title"><b>Anoka Doris Chinwe</b></h5>
                            <p class="card-text">B.Ed french Education</p>
                          </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-3"  >

                    <div class="card">
                        
                    <img class="rounded img-fluid mx-auto image" style="height:220px; width:200px;" src="../assets/img/gold.jpg" />
                    
                        <div class="card-body text-center">
                            <h5 class="card-title"><b>Madu Chizitere Gold</b></h5>
                            <p class="card-text">HND in public Administration</p>
                          </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-3"  >

                    <div class="card">
                        
                    <img class="rounded img-fluid mx-auto image" style="height:220px; width:200px;" src="../assets/img/nene.jpg" />
                    
                        <div class="card-body text-center">
                            <h5 class="card-title"><b>Odibo Chinedu Nene </b></h5>
                            <p class="card-text">B.Sc., Education Physics</p>
                          </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-3"  >

                    <div class="card">
                        
                    <img class="rounded img-fluid mx-auto image" style="height:220px; width:200px;" src="../assets/img/ihuoma.jpg" />
                    
                        <div class="card-body text-center">
                            <h5 class="card-title"><b>Ihuoma Vincentia Nzubechi</b></h5>
                            <p class="card-text">B.Sc Business Education</p>
                          </div>
                    </div>
                </div>

            <div class="col-sm-12 col-md-3"  >

                    <div class="card">
                        
                    <img class="rounded img-fluid mx-auto image" style="height:220px ; width:200px;" src="../assets/img/chioma.jpg" />
                    
                        <div class="card-body text-center">
                            <h5 class="card-title"><b>Mrs Alaoma chioma</b></h5>
                            <p class="card-text">BSC psychology, M SC, Clinical psychology </p>
                          </div>
                    </div>
                </div>

            <div class="col-sm-12 col-md-3"  >

                    <div class="card">
                        
                    <img class="rounded img-fluid mx-auto image" style="height:220px ; width:200px;" src="../assets/img/kelechi.jpg" />
                    
                        <div class="card-body text-center">
                            <h5 class="card-title"><b>Alilonu Kelechi Pamela</b></h5>
                            <p class="card-text">Bsc In Mass communication, PGDE Social Studies, Masters In Mass communication</p>
                          </div>
                    </div>
                </div>

            <div class="col-sm-12 col-md-3"  >

                    <div class="card">
                        
                    <img class="rounded img-fluid mx-auto image" style="height:220px; width:200px;" src="../assets/img/ihe.jpg" />
                    
                        <div class="card-body text-center">
                            <h5 class="card-title"><b>Iheanacho Ngozika</b></h5>
                            <p class="card-text">Fine and Applied Arts( B.A Hons)</p>
                          </div>
                    </div>
                </div>

            <div class="col-sm-12 col-md-3"  >

                    <div class="card">
                        
                    <img class="rounded img-fluid mx-auto image" style="height:220px; width:200px;" src="../assets/img/diala.jpg" />
                    
                        <div class="card-body text-center">
                            <h5 class="card-title"><b>Ifeanyi Diala</b></h5>
                            <p class="card-text">HND Business Administration Bsc, Music, University of Nigeria Nsukka</p>
                          </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3"  >

<div class="card">
    
<img class="rounded img-fluid mx-auto image" style="height:220px; width:200px;" src="../assets/img/festina.jpg" />

    <div class="card-body text-center">
        <h5 class="card-title"><b>Festina Ibeawuchi</b></h5>
        <p class="card-text">B.Sc Mass communication</p>
      </div>
</div>
</div>

<div class="col-sm-12 col-md-3"  >

<div class="card">
    
<img class="rounded img-fluid mx-auto image" style="height:220px; width:200px;" src="../assets/img/charity.jpg" />

    <div class="card-body text-center">
        <h5 class="card-title"><b>Ofurum Charity Nkechi</b></h5>
        <p class="card-text">BSC Urban and Regional Planning</p>
      </div>
</div>
</div>
            </div>
        </div>
    </div>
</div> -->
<!-- end of about Principal of School-->
@endsection