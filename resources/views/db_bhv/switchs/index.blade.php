@extends('layouts.app')

@section('content')
    <h1 align="center">Switche</h1>

    <div class="container">
            <h6 align="center">Netz Legende</h6>
            <div class="row">
                <div class="col TK">
                        <small> {{Form::label('TK', 'TK Netz')}} </small>
                </div>
                <div class="col inFI">
                        <small> {{Form::label('inFI', 'Institut FI')}} </small>
                </div>
                <div class="col inSF">
                        <small> {{Form::label('inSF', 'Institut SF')}} </small>
                </div>
                <div class="col inVW">
                        <small> {{Form::label('inVW', 'Institut VW')}} </small>
                </div>
                <div class="col Drucker">
                        <small> {{Form::label('Drucker', 'Drucker')}} </small>
                </div>
                <div class="col uplinkS11-15">
                        <small> {{Form::label('uplinkS11-15', 'Uplink_Sw11-15')}} </small>
                </div>
                <div class="col mgmt">
                        <small> {{Form::label('mgmt', 'Management')}} </small>
                </div>
                <div class="col allVlan">
                        <small> {{Form::label('allVlan', 'Alle VLAN´s')}} </small>
                </div>
            </div>
            <div class="row">
                <div class="col">
                        <small> {{Form::label('', '')}} </small>
                </div>
                <div class="col laFI">
                        <small> {{Form::label('laFI', 'Labor FI')}} </small>
                </div>
                <div class="col laSF">
                        <small> {{Form::label('laSF', 'Labor SF')}} </small>
                </div>
                <div class="col">
                        <small> {{Form::label('', '')}} </small>
                </div>
                <div class="col">
                        <small> {{Form::label('', '')}} </small>
                </div>
                <div class="col uplinkS1">
                        <small> {{Form::label('uplinkS1', 'Uplink_Sw01')}} </small>
                </div>
                <div class="col">
                        <small> {{Form::label('', '')}} </small>
                </div>
                <div class="col">
                        <small> {{Form::label('', '')}} </small>
                </div>
            </div>
            <div class="row">
                <div class="col">
                        <small> {{Form::label('', '')}} </small>
                </div>
                <div class="col laFIAQ">
                        <small> {{Form::label('laFIAQ', 'Labor FI Aquak.')}} </small>
                </div>
                <div class="col">
                        <small> {{Form::label('', '')}} </small>
                </div>
                <div class="col">
                        <small> {{Form::label('', '')}} </small>
                </div>
                <div class="col">
                        <small> {{Form::label('', '')}} </small>
                </div>
                <div class="col">
                        <small> {{Form::label('', '')}} </small>
                </div>
                <div class="col">
                        <small> {{Form::label('', '')}} </small>
                </div>
                <div class="col">
                        <small> {{Form::label('', '')}} </small>
                </div>
            </div>
          </div>

    <br>
    <h5>swit07-bhv</h3>
<table class="table table-sm table-bordered">
            <!-- Core Switch 1-->
            <tr> <!-- Core Switch 1: Slot A & B -->
            <!-- Slot A1/2-->    
              <td width="50px">Slot A</td>
              <td bgcolor="yellow" width="30px"><a href="/switch/1A1/edit">1</td>
              <td bgcolor="yellow" width="30px"><a href="/switch/1A3/edit">3</td>
              <td bgcolor="yellow" width="30px"><a href="/switch/1A5/edit">5</td>
              <td bgcolor="yellow" width="30px"><a href="/switch/1A7/edit">7</td>
              <td bgcolor="yellow" width="30px"><a href="/switch/1A9/edit">9</td>
              <td bgcolor="yellow" width="30px"><a href="/switch/1A11/edit">11</td>
              <td bgcolor="yellow" width="30px"><a href="/switch/1A13/edit">13</td>
              <td bgcolor="yellow" width="30px"><a href="/switch/1A15/edit">15</td>
              <td bgcolor="yellow" width="30px"><a href="/switch/1A17/edit">17</td>
              <td bgcolor="yellow" width="30px"><a href="/switch/1A19/edit">19</td>
              <td bgcolor="yellow" width="30px"><a href="/switch/1A21/edit">21</td>
              <td bgcolor="yellow" width="30px"><a href="/switch/1A23/edit">23</td>
              <td width="30px"><a href="/switch"></td>
            <!-- Slot B1/2-->  
              <td width="50px">Slot B</td>
              <td bgcolor="yellow" width="30px"><a href="/switch/1B1/edit">1</td>
              <td bgcolor="yellow" width="30px"><a href="/switch/1B3/edit">3</td>
              <td bgcolor="yellow" width="30px"><a href="/switch/1B5/edit">5</td>
              <td bgcolor="yellow" width="30px"><a href="/switch/1B7/edit">7</td>
              <td bgcolor="yellow" width="30px"><a href="/switch/1B9/edit">9</td>
              <td bgcolor="yellow" width="30px"><a href="/switch/1B11/edit">11</td>
              <td bgcolor="yellow" width="30px"><a href="/switch/1B13/edit">13</td>
              <td bgcolor="yellow" width="30px"><a href="/switch/1B15/edit">15</td>
              <td bgcolor="yellow" width="30px"><a href="/switch/1B17/edit">17</td>
              <td bgcolor="yellow" width="30px"><a href="/switch/1B19/edit">19</td>
              <td bgcolor="yellow" width="30px"><a href="/switch/1B21/edit">21</td>
              <td bgcolor="yellow" width="30px"><a href="/switch/1B23/edit">23</td>
            </tr>
            <tr>
                <!-- Slot A2/2--> 
                <td width="20px"></td>
                <td bgcolor="yellow" width="30px"><a href="/switch/1A2/edit">2</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/1A4/edit">4</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/1A6/edit">6</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/1A8/edit">8</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/1A10/edit">10</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/1A12/edit">12</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/1A14/edit">14</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/1A16/edit">16</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/1A18/edit">18</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/1A20/edit">20</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/1A22/edit">22</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/1A24/edit">24</td>
                <td width="30px"><a href="/switch"></td>
                <td width="20px"></td>
                <!-- Slot B2/2--> 
                <td bgcolor="yellow" width="30px"><a href="/switch/1B2/edit">2</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/1B4/edit">4</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/1B6/edit">6</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/1B8/edit">8</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/1B10/edit">10</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/1B12/edit">12</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/1B14/edit">14</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/1B16/edit">16</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/1B18/edit">18</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/1B20/edit">20</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/1B22/edit">22</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/1B24/edit">24</td>
            </tr>
                <tr>   <!-- Core Switch 1: Slot C & D -->         
                    <!-- Slot C1/2--> 
                    <td width="50px">Slot C</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1C1/edit">1</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1C3/edit">3</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1C5/edit">5</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1C7/edit">7</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1C9/edit">9</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1C11/edit">11</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1C13/edit">13</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1C15/edit">15</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1C17/edit">17</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1C19/edit">19</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1C21/edit">21</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1C23/edit">23</td>
                    <td width="30px"><a href="/switch"></td>
                    <td width="50px">Slot D</td>
                    <!-- Slot D1/2--> 
                    <td bgcolor="yellow" width="30px"><a href="/switch/1D1/edit">1</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1D3/edit">3</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1D5/edit">5</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1D7/edit">7</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1D9/edit">9</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1D11/edit">11</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1D13/edit">13</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1D15/edit">15</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1D17/edit">17</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1D19/edit">19</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1D21/edit">21</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1D23/edit">23</td>
                </tr>
                <tr>
                    <!-- Slot C2/2--> 
                    <td width="20px"></td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1C2/edit">2</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1C4/edit">4</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1C6/edit">6</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1C8/edit">8</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1C10/edit">10</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1C12/edit">12</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1C14/edit">14</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1C16/edit">16</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1C18/edit">18</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1C20/edit">20</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1C22/edit">22</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1C24/edit">24</td>
                    <td width="30px"><a href="/switch"></td>
                    <td width="20px"></td>
                    <!-- Slot D2/2--> 
                    <td bgcolor="yellow" width="30px"><a href="/switch/1D2/edit">2</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1D4/edit">4</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1D6/edit">6</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1D8/edit">8</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1D10/edit">10</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1D12/edit">12</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1D14/edit">14</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1D16/edit">16</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1D18/edit">18</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1D20/edit">20</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1D22/edit">22</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/1D24/edit">24</td>
                </tr>
                    <tr>     <!-- Core Switch 1: Slot E & F -->   
                        <!-- Slot E1/2-->      
                        <td width="50px">Slot E</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1E1/edit"><font color="white">1</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1E3/edit"><font color="white">3</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1E5/edit"><font color="white">5</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1E7/edit"><font color="white">7</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1E9/edit"><font color="white">9</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1E11/edit"><font color="white">11</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1E13/edit"><font color="white">13</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1E15/edit"><font color="white">15</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1E17/edit"><font color="white">17</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1E19/edit"><font color="white">19</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1E21/edit"><font color="white">21</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1E23/edit"><font color="white">23</td>
                        <td width="30px"><a href="/switch"></td>
                        <td width="50px">Slot F</td>
                        <!-- Slot F1/2-->  
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1F1/edit"><font color="white">1</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1F3/edit"><font color="white">3</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1F5/edit"><font color="white">5</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1F7/edit"><font color="white">7</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1F9/edit"><font color="white">9</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1F11/edit"><font color="white">11</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1F13/edit"><font color="white">13</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1F15/edit"><font color="white">15</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1F17/edit"><font color="white">17</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1F19/edit"><font color="white">19</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1F21/edit"><font color="white">21</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1F23/edit"><font color="white">23</td>
                    </tr>
                    <tr>
                        <td width="20px"></td>
                        <!-- Slot E2/2-->  
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1E2/edit"><font color="white">2</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1E4/edit"><font color="white">4</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1E6/edit"><font color="white">6</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1E8/edit"><font color="white">8</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1E10/edit"><font color="white">10</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1E12/edit"><font color="white">12</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1E14/edit"><font color="white">14</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1E16/edit"><font color="white">16</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1E18/edit"><font color="white">18</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1E20/edit"><font color="white">20</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1E22/edit"><font color="white">22</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1E22/edit"><font color="white">24</td>
                        <td width="30px"><a href="/switch"></td>
                        <td width="20px"></td>
                        <!-- Slot F2/2-->  
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1F2/edit"><font color="white">2</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1F4/edit"><font color="white">4</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1F6/edit"><font color="white">6</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1F8/edit"><font color="white">8</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1F10/edit"><font color="white">10</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1F12/edit"><font color="white">12</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1F14/edit"><font color="white">14</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1F16/edit"><font color="white">16</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1F18/edit"><font color="white">18</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1F20/edit"><font color="white">20</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1F22/edit"><font color="white">22</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/1F24/edit"><font color="white">24</td>
                    </tr>
                        <tr>     <!-- Core Switch 1: Slot G & H -->        
                            <td width="50px">Slot G</td>
                            <!-- Slot G1/2-->  
                            <td bgcolor="blue" width="30px"><a href="/switch/1G1/edit"><font color="white">1</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1G3/edit"><font color="white">3</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1G5/edit"><font color="white">5</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1G7/edit"><font color="white">7</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1G9/edit"><font color="white">9</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1G11/edit"><font color="white">11</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1G13/edit"><font color="white">13</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1G15/edit"><font color="white">15</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1G17/edit"><font color="white">17</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1G19/edit"><font color="white">19</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1G21/edit"><font color="white">21</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1G23/edit"><font color="white">23</td>
                            <td width="30px"><a href="/switch"></td>
                            <td width="50px">Slot H</td>
                            <!-- Slot H1/2-->  
                            <td bgcolor="blue" width="30px"><a href="/switch/1H1/edit"><font color="white">1</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1H3/edit"><font color="white">3</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1H5/edit"><font color="white">5</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1H7/edit"><font color="white">7</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1H9/edit"><font color="white">9</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1H11/edit"><font color="white">11</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1H13/edit"><font color="white">13</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1H15/edit"><font color="white">15</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1H17/edit"><font color="white">17</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1H19/edit"><font color="white">19</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1H21/edit"><font color="white">21</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1H23/edit"><font color="white">23</td>
                        </tr>
                        <tr>
                            <!-- Slot G2/2-->
                            <td width="20px"></td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1G2/edit"><font color="white"><font color="white">2</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1G4/edit"><font color="white">4</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1G6/edit"><font color="white">6</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1G8/edit"><font color="white">8</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1G10/edit"><font color="white">10</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1G12/edit"><font color="white">12</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1G14/edit"><font color="white">14</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1G16/edit"><font color="white">16</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1G18/edit"><font color="white">18</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1G20/edit"><font color="white">20</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1G22/edit"><font color="white">22</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1G24/edit"><font color="white">24</td>
                            <td width="30px"><a href="/switch"></td>
                            <td width="20px"></td>
                            <!-- Slot H2/2-->
                            <td bgcolor="blue" width="30px"><a href="/switch/1H2/edit"><font color="white">2</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1H4/edit"><font color="white">4</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1H6/edit"><font color="white">6</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1H8/edit"><font color="white">8</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1H10/edit"><font color="white">10</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1H12/edit"><font color="white">12</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1H14/edit"><font color="white">14</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1H16/edit"><font color="white">16</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1H18/edit"><font color="white">18</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1H20/edit"><font color="white">20</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1H22/edit"><font color="white">22</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/1H24/edit"><font color="white">24</td>
                        </tr>
                            <tr>     <!-- Core Switch 1: Slot I & J -->    
                                <!-- Slot I1/2-->    
                                <td width="50px">Slot I</td>
                                <td bgcolor="greenyellow" width="30px"><a href="/switch/1I1/edit">1</td>
                                <td bgcolor="greenyellow" width="30px"><a href="/switch/1I3/edit">3</td>
                                <td bgcolor="greenyellow" width="30px"><a href="/switch/1I5/edit">5</td>
                                <td bgcolor="greenyellow" width="30px"><a href="/switch/1I7/edit">7</td>
                                <td bgcolor="greenyellow" width="30px"><a href="/switch/1I9/edit">9</td>
                                <td bgcolor="greenyellow" width="30px"><a href="/switch/1I11/edit">11</td>
                                <td width="30px"><a href="/switch/1I13/edit">13</td>
                                <td width="30px"><a href="/switch/1I115/edit">15</td>
                                <td width="30px"><a href="/switch/1I17/edit">17</td>
                                <td width="30px"><a href="/switch/1I19/edit">19</td>
                                <td width="30px"><a href="/switch/1I21/edit">21</td>
                                <td width="30px"><a href="/switch/1I23/edit">23</td>
                                <td width="30px"><a href="/switch"></td>
                                <td width="50px">Slot J</td>
                                <!-- Slot J1/2--> 
                                <td bgcolor="lightgreen" width="30px"><a href="/switch/1J1/edit">1</td>
                                <td bgcolor="lightgreen" width="30px"><a href="/switch/1J3/edit">3</td>
                                <td bgcolor="lightgreen" width="30px"><a href="/switch/1J5/edit">5</td>
                                <td bgcolor="lightgreen" width="30px"><a href="/switch/1J7/edit">7</td>
                                <td bgcolor="lightgreen" width="30px"><a href="/switch/1J9/edit">9</td>
                                <td bgcolor="lightgreen" width="30px"><a href="/switch/1J11/edit">11</td>
                                <td width="30px"><a href="/switch/1J13/edit">13</td>
                                <td width="30px"><a href="/switch/1J15/edit">15</td>
                                <td width="30px"><a href="/switch/1J17/edit">17</td>
                                <td width="30px"><a href="/switch/1J19/edit">19</td>
                                <td bgcolor="orange" width="30px"><a href="/switch/1J21/edit">21</td>
                                <td bgcolor="orange" width="30px"><a href="/switch/1J23/edit">23</td>
                            </tr>
                            <tr>
                                <!-- Slot I2/2--> 
                                <td width="20px"></td>
                                <td bgcolor="greenyellow" width="30px"><a href="/switch/1I2/edit">2</td>
                                <td bgcolor="greenyellow" width="30px"><a href="/switch/1I4/edit">4</td>
                                <td bgcolor="greenyellow" width="30px"><a href="/switch/1I6/edit">6</td>
                                <td bgcolor="greenyellow" width="30px"><a href="/switch/1I8/edit">8</td>
                                <td bgcolor="greenyellow" width="30px"><a href="/switch/1I10/edit">10</td>
                                <td bgcolor="greenyellow" width="30px"><a href="/switch/1I12/edit">12</td>
                                <td width="30px"><a href="/switch/1I14/edit">14</td>
                                <td width="30px"><a href="/switch/1I16/edit">16</td>
                                <td width="30px"><a href="/switch/1I18/edit">18</td>
                                <td width="30px"><a href="/switch/1I20/edit">20</td>
                                <td width="30px"><a href="/switch/1I22/edit">22</td>
                                <td width="30px"><a href="/switch/1I24/edit">24</td>
                                <td width="30px"><a href="/switch"></td>
                                <td width="20px"></td>
                                <!-- Slot J2/2--> 
                                <td bgcolor="lightgreen" width="30px"><a href="/switch/1J2/edit">2</td>
                                <td bgcolor="lightgreen" width="30px"><a href="/switch/1J4/edit">4</td>
                                <td bgcolor="lightgreen" width="30px"><a href="/switch/1J6/edit">6</td>
                                <td bgcolor="lightgreen" width="30px"><a href="/switch/1J8/edit">8</td>
                                <td bgcolor="lightgreen" width="30px"><a href="/switch/1J10/edit">10</td>
                                <td bgcolor="lightgreen" width="30px"><a href="/switch/1J12/edit">12</td>
                                <td width="30px"><a href="/switch/1J14/edit">14</td>
                                <td width="30px"><a href="/switch/1J16/edit">16</td>
                                <td width="30px"><a href="/switch/1J18/edit">18</td>
                                <td width="30px"><a href="/switch/1J20/edit">20</td>
                                <td bgcolor="orange" width="30px"><a href="/switch/1J22/edit">22</td>
                                <td bgcolor="purple" width="30px"><a href="/switch/1J24/edit"><font color="white">24</td>
                            </tr>
                                <tr>     <!-- Core Switch 1: Slot K & L -->    
                                    <!-- Slot K1/2-->     
                                    <td width="50px">Slot K</td>
                                    <td width="30px"><a href="/switch/1K1/edit">1</td>
                                    <td width="30px"><a href="/switch/1K3/edit">3</td>
                                    <td width="30px"><a href="/switch/1K5/edit">5</td>
                                    <td width="30px"><a href="/switch/1K7/edit">7</td>
                                    <td width="30px"><a href="/switch/1K9/edit">9</td>
                                    <td width="30px"><a href="/switch/1K11/edit">11</td>
                                    <td width="30px"><a href="/switch/1K13/edit">13</td>
                                    <td width="30px"><a href="/switch/1K15/edit">15</td>
                                    <td width="30px"><a href="/switch/1K17/edit">17</td>
                                    <td width="30px"><a href="/switch/1K19/edit">19</td>
                                    <td bgcolor="darkgrey" width="30px"><a href="/switch/1K21/edit">21</td>
                                    <td bgcolor="darkgrey" width="30px"><a href="/switch/1K23/edit">23</td>
                                    <td width="30px"><a href="/switch"></td>
                                    <td width="50px">Slot L</td>
                                    <!-- Slot L1/2--> 
                                    <td width="30px"><a href="/switch/1L/edit"></td>
                                    <td width="30px"><a href="/switch/1L/edit"></td>
                                    <td width="30px"><a href="/switch/1L1/edit">1</td>
                                    <td width="30px"><a href="/switch/1L2/edit">2</td>
                                    <td width="30px"><a href="/switch/1L3/edit">3</td>
                                    <td width="30px"><a href="/switch/1L4/edit">4</td>
                                    <td width="30px"><a href="/switch/1L5/edit">5</td>
                                    <td width="30px"><a href="/switch/1L6/edit">6</td>
                                    <td bgcolor="red" width="30px"><a href="/switch/1L7/edit">7</td>
                                    <td bgcolor="red" width="30px"><a href="/switch/1L8/edit">8</td>
                                    <td width="30px"><a href="/switch"></td>
                                    <td width="30px"><a href="/switch"></td>
                                </tr>
                                <tr>
                                    <!-- Slot K2/2--> 
                                    <td width="20px"></td>
                                    <td width="30px"><a href="/switch/1K2/edit">2</td>
                                    <td width="30px"><a href="/switch/1K4/edit">4</td>
                                    <td width="30px"><a href="/switch/1K6/edit">6</td>
                                    <td width="30px"><a href="/switch/1K8/edit">8</td>
                                    <td width="30px"><a href="/switch/1K10/edit">10</td>
                                    <td width="30px"><a href="/switch/1K12/edit">12</td>
                                    <td width="30px"><a href="/switch/1K14/edit">14</td>
                                    <td width="30px"><a href="/switch/1K16/edit">16</td>
                                    <td width="30px"><a href="/switch/1K18/edit">18</td>
                                    <td bgcolor="darkgrey" width="30px"><a href="/switch/1K20/edit">20</td>
                                    <td bgcolor="darkgrey" width="30px"><a href="/switch/1K22/edit">22</td>
                                    <td bgcolor="purple" width="30px"><a href="/switch/1K24/edit"><font color="white">24</td>
                                        <!-- Slot L2/2--> 
                                    <td width="30px"><a href="/switch"></td>
                                    <td width="20px"></td>
                                    <td width="30px"><a href="/switch"></td>
                                    <td width="30px"><a href="/switch"></td>
                                    <td width="30px"><a href="/switch"></td>
                                    <td width="30px"><a href="/switch"></td>
                                    <td width="30px"><a href="/switch"></td>
                                    <td width="30px"><a href="/switch"></td>
                                    <td width="30px"><a href="/switch"></td>
                                    <td width="30px"><a href="/switch"></td>
                                    <td width="30px"><a href="/switch"></td>
                                    <td width="30px"><a href="/switch"></td>
                                    <td width="30px"><a href="/switch"></td>
                                    <td width="30px"><a href="/switch"></td>
                                </tr>
                  
    
                </table>
                <br>

    <!--Core Switch 2 -->
    <h5>swit08-bhv</h3>
<table class="table table-sm table-bordered">
            <!-- Core Switch 2-->
            <tr> <!-- Core Switch 2: Slot A & B -->
            <!-- Slot A1/2-->    
                <td width="50px">Slot A</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2A1/edit">1</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2A3/edit">3</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2A5/edit">5</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2A7/edit">7</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2A9/edit">9</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2A11/edit">11</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2A13/edit">13</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2A15/edit">15</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2A17/edit">17</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2A19/edit">19</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2A21/edit">21</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2A23/edit">23</td>
                <td width="30px"><a href="/switch"></td>
            <!-- Slot B1/2-->  
                <td width="50px">Slot B</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2B1/edit">1</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2B3/edit">3</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2B5/edit">5</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2B7/edit">7</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2B9/edit">9</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2B11/edit">11</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2B13/edit">13</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2B15/edit">15</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2B17/edit">17</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2B19/edit">19</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2B21/edit">21</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2B23/edit">23</td>
            </tr>
            <tr>
                <!-- Slot A2/2--> 
                <td width="20px"></td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2A2/edit">2</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2A4/edit">4</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2A6/edit">6</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2A8/edit">8</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2A10/edit">10</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2A12/edit">12</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2A14/edit">14</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2A16/edit">16</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2A18/edit">18</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2A20/edit">20</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2A22/edit">22</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2A24/edit">24</td>
                <td width="30px"><a href="/switch"></td>
                <td width="20px"></td>
                <!-- Slot B2/2--> 
                <td bgcolor="yellow" width="30px"><a href="/switch/2B2/edit">2</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2B4/edit">4</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2B6/edit">6</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2B8/edit">8</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2B10/edit">10</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2B12/edit">12</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2B14/edit">14</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2B16/edit">16</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2B18/edit">18</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2B20/edit">20</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2B22/edit">22</td>
                <td bgcolor="yellow" width="30px"><a href="/switch/2B24/edit">24</td>
            </tr>
                <tr>   <!-- Core Switch 1: Slot C & D -->         
                    <!-- Slot C1/2--> 
                    <td width="50px">Slot C</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2C1/edit">1</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2C3/edit">3</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2C5/edit">5</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2C7/edit">7</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2C9/edit">9</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2C11/edit">11</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2C13/edit">13</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2C15/edit">15</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2C17/edit">17</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2C19/edit">19</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2C21/edit">21</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2C23/edit">23</td>
                    <td width="30px"><a href="/switch"></td>
                    <td width="50px">Slot D</td>
                    <!-- Slot D1/2--> 
                    <td bgcolor="yellow" width="30px"><a href="/switch/2D1/edit">1</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2D3/edit">3</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2D5/edit">5</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2D7/edit">7</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2D9/edit">9</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2D11/edit">11</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2D13/edit">13</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2D15/edit">15</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2D17/edit">17</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2D19/edit">19</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2D21/edit">21</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2D23/edit">23</td>
                </tr>
                <tr>
                    <!-- Slot C2/2--> 
                    <td width="20px"></td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2C2/edit">2</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2C4/edit">4</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2C6/edit">6</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2C8/edit">8</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2C10/edit">10</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2C12/edit">12</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2C14/edit">14</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2C16/edit">16</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2C18/edit">18</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2C20/edit">20</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2C22/edit">22</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2C24/edit">24</td>
                    <td width="30px"><a href="/switch"></td>
                    <td width="20px"></td>
                    <!-- Slot D2/2--> 
                    <td bgcolor="yellow" width="30px"><a href="/switch/2D2/edit">2</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2D4/edit">4</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2D6/edit">6</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2D8/edit">8</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2D10/edit">10</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2D12/edit">12</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2D14/edit">14</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2D16/edit">16</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2D18/edit">18</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2D20/edit">20</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2D22/edit">22</td>
                    <td bgcolor="yellow" width="30px"><a href="/switch/2D24/edit">24</td>
                </tr>
                    <tr>     <!-- Core Switch 1: Slot E & F -->   
                        <!-- Slot E1/2-->      
                        <td width="50px">Slot E</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2E1/edit"><font color="white">1</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2E3/edit"><font color="white">3</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2E5/edit"><font color="white">5</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2E7/edit"><font color="white">7</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2E9/edit"><font color="white">9</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2E11/edit"><font color="white">11</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2E13/edit"><font color="white">13</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2E15/edit"><font color="white">15</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2E17/edit"><font color="white">17</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2E19/edit"><font color="white">19</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2E21/edit"><font color="white">21</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2E23/edit"><font color="white">23</td>
                        <td width="30px"><a href="/switch"></td>
                        <td width="50px">Slot F</td>
                        <!-- Slot F1/2-->  
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2F1/edit"><font color="white">1</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2F3/edit"><font color="white">3</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2F5/edit"><font color="white">5</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2F7/edit"><font color="white">7</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2F9/edit"><font color="white">9</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2F11/edit"><font color="white">11</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2F13/edit"><font color="white">13</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2F15/edit"><font color="white">15</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2F17/edit"><font color="white">17</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2F19/edit"><font color="white">19</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2F21/edit"><font color="white">21</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2F23/edit"><font color="white">23</td>
                    </tr>
                    <tr>
                        <td width="20px"></td>
                        <!-- Slot E2/2-->  
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2E2/edit"><font color="white">2</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2E4/edit"><font color="white">4</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2E6/edit"><font color="white">6</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2E8/edit"><font color="white">8</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2E10/edit"><font color="white">10</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2E12/edit"><font color="white">12</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2E14/edit"><font color="white">14</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2E16/edit"><font color="white">16</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2E18/edit"><font color="white">18</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2E20/edit"><font color="white">20</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2E22/edit"><font color="white">22</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2E22/edit"><font color="white">24</td>
                        <td width="30px"><a href="/switch"></td>
                        <td width="20px"></td>
                        <!-- Slot F2/2-->  
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2F2/edit"><font color="white">2</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2F4/edit"><font color="white">4</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2F6/edit"><font color="white">6</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2F8/edit"><font color="white">8</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2F10/edit"><font color="white">10</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2F12/edit"><font color="white">12</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2F14/edit"><font color="white">14</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2F16/edit"><font color="white">16</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2F18/edit"><font color="white">18</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2F20/edit"><font color="white">20</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2F22/edit"><font color="white">22</td>
                        <td bgcolor="darkgreen" width="30px"><a href="/switch/2F24/edit"><font color="white">24</td>
                    </tr>
                        <tr>     <!-- Core Switch 1: Slot G & H -->        
                            <td width="50px">Slot G</td>
                            <!-- Slot G1/2-->  
                            <td bgcolor="blue" width="30px"><a href="/switch/2G1/edit"><font color="white">1</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2G3/edit"><font color="white">3</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2G5/edit"><font color="white">5</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2G7/edit"><font color="white">7</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2G9/edit"><font color="white">9</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2G11/edit"><font color="white">11</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2G13/edit"><font color="white">13</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2G15/edit"><font color="white">15</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2G17/edit"><font color="white">17</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2G19/edit"><font color="white">19</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2G21/edit"><font color="white">21</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2G23/edit"><font color="white">23</td>
                            <td width="30px"><a href="/switch"></td>
                            <td width="50px">Slot H</td>
                            <!-- Slot H1/2-->  
                            <td bgcolor="blue" width="30px"><a href="/switch/2H1/edit"><font color="white">1</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2H3/edit"><font color="white">3</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2H5/edit"><font color="white">5</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2H7/edit"><font color="white">7</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2H9/edit"><font color="white">9</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2H11/edit"><font color="white">11</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2H13/edit"><font color="white">13</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2H15/edit"><font color="white">15</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2H17/edit"><font color="white">17</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2H19/edit"><font color="white">19</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2H21/edit"><font color="white">21</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2H23/edit"><font color="white">23</td>
                        </tr>
                        <tr>
                            <!-- Slot G2/2-->
                            <td width="20px"></td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2G2/edit"><font color="white"><font color="white">2</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2G4/edit"><font color="white">4</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2G6/edit"><font color="white">6</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2G8/edit"><font color="white">8</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2G10/edit"><font color="white">10</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2G12/edit"><font color="white">12</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2G14/edit"><font color="white">14</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2G16/edit"><font color="white">16</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2G18/edit"><font color="white">18</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2G20/edit"><font color="white">20</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2G22/edit"><font color="white">22</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2G24/edit"><font color="white">24</td>
                            <td width="30px"><a href="/switch"></td>
                            <td width="20px"></td>
                            <!-- Slot H2/2-->
                            <td bgcolor="blue" width="30px"><a href="/switch/2H2/edit"><font color="white">2</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2H4/edit"><font color="white">4</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2H6/edit"><font color="white">6</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2H8/edit"><font color="white">8</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2H10/edit"><font color="white">10</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2H12/edit"><font color="white">12</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2H14/edit"><font color="white">14</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2H16/edit"><font color="white">16</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2H18/edit"><font color="white">18</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2H20/edit"><font color="white">20</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2H22/edit"><font color="white">22</td>
                            <td bgcolor="blue" width="30px"><a href="/switch/2H24/edit"><font color="white">24</td>
                        </tr>
                            <tr>     <!-- Core Switch 1: Slot I & J -->    
                                <!-- Slot I1/2-->    
                                <td width="50px">Slot I</td>
                                <td bgcolor="greenyellow" width="30px"><a href="/switch/2I1/edit">1</td>
                                <td bgcolor="greenyellow" width="30px"><a href="/switch/2I3/edit">3</td>
                                <td bgcolor="greenyellow" width="30px"><a href="/switch/2I5/edit">5</td>
                                <td bgcolor="greenyellow" width="30px"><a href="/switch/2I7/edit">7</td>
                                <td bgcolor="greenyellow" width="30px"><a href="/switch/2I9/edit">9</td>
                                <td bgcolor="greenyellow" width="30px"><a href="/switch/2I11/edit">11</td>
                                <td width="30px"><a href="/switch/2I13/edit">13</td>
                                <td width="30px"><a href="/switch/2I115/edit">15</td>
                                <td width="30px"><a href="/switch/2I17/edit">17</td>
                                <td width="30px"><a href="/switch/2I19/edit">19</td>
                                <td width="30px"><a href="/switch/2I21/edit">21</td>
                                <td width="30px"><a href="/switch/2I23/edit">23</td>
                                <td width="30px"><a href="/switch"></td>
                                <td width="50px">Slot J</td>
                                <!-- Slot J1/2--> 
                                <td bgcolor="lightgreen" width="30px"><a href="/switch/2J1/edit">1</td>
                                <td bgcolor="lightgreen" width="30px"><a href="/switch/2J3/edit">3</td>
                                <td bgcolor="lightgreen" width="30px"><a href="/switch/2J5/edit">5</td>
                                <td bgcolor="lightgreen" width="30px"><a href="/switch/2J7/edit">7</td>
                                <td bgcolor="lightgreen" width="30px"><a href="/switch/2J9/edit">9</td>
                                <td bgcolor="lightgreen" width="30px"><a href="/switch/2J11/edit">11</td>
                                <td width="30px"><a href="/switch/2J13/edit">13</td>
                                <td width="30px"><a href="/switch/2J15/edit">15</td>
                                <td width="30px"><a href="/switch/2J17/edit">17</td>
                                <td width="30px"><a href="/switch/2J19/edit">19</td>
                                <td width="30px"><a href="/switch/2J21/edit">21</td>
                                <td bgcolor="orange" width="30px"><a href="/switch/2J23/edit">23</td>
                            </tr>
                            <tr>
                                <!-- Slot I2/2--> 
                                <td width="20px"></td>
                                <td bgcolor="greenyellow" width="30px"><a href="/switch/2I2/edit">2</td>
                                <td bgcolor="greenyellow" width="30px"><a href="/switch/2I4/edit">4</td>
                                <td bgcolor="greenyellow" width="30px"><a href="/switch/2I6/edit">6</td>
                                <td bgcolor="greenyellow" width="30px"><a href="/switch/2I8/edit">8</td>
                                <td bgcolor="greenyellow" width="30px"><a href="/switch/2I10/edit">10</td>
                                <td bgcolor="greenyellow" width="30px"><a href="/switch/2I12/edit">12</td>
                                <td width="30px"><a href="/switch/2I14/edit">14</td>
                                <td width="30px"><a href="/switch/2I16/edit">16</td>
                                <td width="30px"><a href="/switch/2I18/edit">18</td>
                                <td width="30px"><a href="/switch/2I20/edit">20</td>
                                <td width="30px"><a href="/switch/2I22/edit">22</td>
                                <td width="30px"><a href="/switch/2I24/edit">24</td>
                                <td width="30px"><a href="/switch"></td>
                                <td width="20px"></td>
                                <!-- Slot J2/2--> 
                                <td bgcolor="lightgreen" width="30px"><a href="/switch/2J2/edit">2</td>
                                <td bgcolor="lightgreen" width="30px"><a href="/switch/2J4/edit">4</td>
                                <td bgcolor="lightgreen" width="30px"><a href="/switch/2J6/edit">6</td>
                                <td bgcolor="lightgreen" width="30px"><a href="/switch/2J8/edit">8</td>
                                <td bgcolor="lightgreen" width="30px"><a href="/switch/2J10/edit">10</td>
                                <td bgcolor="lightgreen" width="30px"><a href="/switch/2J12/edit">12</td>
                                <td width="30px"><a href="/switch/2J14/edit">14</td>
                                <td width="30px"><a href="/switch/2J16/edit">16</td>
                                <td width="30px"><a href="/switch/2J18/edit">18</td>
                                <td width="30px"><a href="/switch/2J20/edit">20</td>
                                <td width="30px"><a href="/switch/2J22/edit">22</td>
                                <td bgcolor="purple" width="30px"><a href="/switch/2J24/edit"><font color="white">24</td>
                            </tr>
                                <tr>     <!-- Core Switch 1: Slot K & L -->    
                                    <!-- Slot K1/2-->     
                                    <td width="50px">Slot K</td>
                                    <td width="30px"><a href="/switch/2K1/edit">1</td>
                                    <td width="30px"><a href="/switch/2K3/edit">3</td>
                                    <td width="30px"><a href="/switch/2K5/edit">5</td>
                                    <td width="30px"><a href="/switch/2K7/edit">7</td>
                                    <td width="30px"><a href="/switch/2K9/edit">9</td>
                                    <td width="30px"><a href="/switch/2K11/edit">11</td>
                                    <td width="30px"><a href="/switch/2K13/edit">13</td>
                                    <td width="30px"><a href="/switch/2K15/edit">15</td>
                                    <td width="30px"><a href="/switch/2K17/edit">17</td>
                                    <td width="30px"><a href="/switch/2K19/edit">19</td>
                                    <td bgcolor="darkgrey" width="30px"><a href="/switch/2K21/edit">21</td>
                                    <td bgcolor="darkgrey" width="30px"><a href="/switch/2K23/edit">23</td>
                                    <td width="30px"><a href="/switch"></td>
                                    <td width="50px">Slot L</td>
                                    <!-- Slot L1/2--> 
                                    <td width="30px"><a href="/switch/2L/edit"></td>
                                    <td width="30px"><a href="/switch/2L/edit"></td>
                                    <td width="30px"><a href="/switch/2L1/edit">1</td>
                                    <td width="30px"><a href="/switch/2L2/edit">2</td>
                                    <td width="30px"><a href="/switch/2L3/edit">3</td>
                                    <td width="30px"><a href="/switch/2L4/edit">4</td>
                                    <td width="30px"><a href="/switch/2L5/edit">5</td>
                                    <td width="30px"><a href="/switch/2L6/edit">6</td>
                                    <td bgcolor="red" width="30px"><a href="/switch/2L7/edit">7</td>
                                    <td bgcolor="red" width="30px"><a href="/switch/2L8/edit">8</td>
                                    <td width="30px"><a href="/switch"></td>
                                    <td width="30px"><a href="/switch"></td>
                                </tr>
                                <tr>
                                    <!-- Slot K2/2--> 
                                    <td width="20px"></td>
                                    <td width="30px"><a href="/switch/2K2/edit">2</td>
                                    <td width="30px"><a href="/switch/2K4/edit">4</td>
                                    <td width="30px"><a href="/switch/2K6/edit">6</td>
                                    <td width="30px"><a href="/switch/2K8/edit">8</td>
                                    <td width="30px"><a href="/switch/2K10/edit">10</td>
                                    <td width="30px"><a href="/switch/2K12/edit">12</td>
                                    <td width="30px"><a href="/switch/2K14/edit">14</td>
                                    <td width="30px"><a href="/switch/2K16/edit">16</td>
                                    <td width="30px"><a href="/switch/2K18/edit">18</td>
                                    <td bgcolor="darkgrey" width="30px"><a href="/switch/2K20/edit">20</td>
                                    <td bgcolor="darkgrey" width="30px"><a href="/switch/2K22/edit">22</td>
                                    <td bgcolor="purple" width="30px"><a href="/switch/2K24/edit"><font color="white">24</td>
                                        <!-- Slot L2/2--> 
                                    <td width="30px"><a href="/switch"></td>
                                    <td width="20px"></td>
                                    <td width="30px"><a href="/switch"></td>
                                    <td width="30px"><a href="/switch"></td>
                                    <td width="30px"><a href="/switch"></td>
                                    <td width="30px"><a href="/switch"></td>
                                    <td width="30px"><a href="/switch"></td>
                                    <td width="30px"><a href="/switch"></td>
                                    <td width="30px"><a href="/switch"></td>
                                    <td width="30px"><a href="/switch"></td>
                                    <td width="30px"><a href="/switch"></td>
                                    <td width="30px"><a href="/switch"></td>
                                    <td width="30px"><a href="/switch"></td>
                                    <td width="30px"><a href="/switch"></td>
                                </tr>
                    
    
                </table>
                <br>

        
    <!--Core Switch 3 -->
    <h5>swit09-bhv</h3>
<table class="table table-sm table-bordered">
    
    <tr> <!-- Core Switch 3: Slot A & B -->
    <!-- Slot A1/2-->    
    <td width="50px">Slot A</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3A1/edit">1</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3A3/edit">3</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3A5/edit">5</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3A7/edit">7</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3A9/edit">9</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3A11/edit">11</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3A13/edit">13</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3A15/edit">15</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3A17/edit">17</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3A19/edit">19</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3A21/edit">21</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3A23/edit">23</td>
    <td width="30px"><a href="/switch"></td>
    <!-- Slot B1/2-->  
    <td width="50px">Slot B</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3B1/edit">1</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3B3/edit">3</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3B5/edit">5</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3B7/edit">7</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3B9/edit">9</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3B11/edit">11</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3B13/edit">13</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3B15/edit">15</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3B17/edit">17</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3B19/edit">19</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3B21/edit">21</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3B23/edit">23</td>
    </tr>
    <tr>
    <!-- Slot A2/2--> 
    <td width="20px"></td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3A2/edit">2</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3A4/edit">4</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3A6/edit">6</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3A8/edit">8</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3A10/edit">10</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3A12/edit">12</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3A14/edit">14</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3A16/edit">16</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3A18/edit">18</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3A20/edit">20</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3A22/edit">22</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3A24/edit">24</td>
    <td width="30px"><a href="/switch"></td>
    <td width="20px"></td>
    <!-- Slot B2/2--> 
    <td bgcolor="yellow" width="30px"><a href="/switch/3B2/edit">2</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3B4/edit">4</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3B6/edit">6</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3B8/edit">8</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3B10/edit">10</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3B12/edit">12</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3B14/edit">14</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3B16/edit">16</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3B18/edit">18</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3B20/edit">20</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3B22/edit">22</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3B24/edit">24</td>
    </tr>
    <tr>   <!-- Core Switch 1: Slot C & D -->         
    <!-- Slot C1/2--> 
    <td width="50px">Slot C</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3C1/edit">1</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3C3/edit">3</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3C5/edit">5</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3C7/edit">7</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3C9/edit">9</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3C11/edit">11</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3C13/edit">13</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3C15/edit">15</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3C17/edit">17</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3C19/edit">19</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3C21/edit">21</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3C23/edit">23</td>
    <td width="30px"><a href="/switch"></td>
    <td width="50px">Slot D</td>
    <!-- Slot D1/2--> 
    <td bgcolor="yellow" width="30px"><a href="/switch/3D1/edit">1</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3D3/edit">3</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3D5/edit">5</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3D7/edit">7</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3D9/edit">9</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3D11/edit">11</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3D13/edit">13</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3D15/edit">15</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3D17/edit">17</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3D19/edit">19</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3D21/edit">21</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3D23/edit">23</td>
    </tr>
    <tr>
    <!-- Slot C2/2--> 
    <td width="20px"></td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3C2/edit">2</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3C4/edit">4</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3C6/edit">6</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3C8/edit">8</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3C10/edit">10</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3C12/edit">12</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3C14/edit">14</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3C16/edit">16</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3C18/edit">18</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3C20/edit">20</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3C22/edit">22</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3C24/edit">24</td>
    <td width="30px"><a href="/switch"></td>
    <td width="20px"></td>
    <!-- Slot D2/2--> 
    <td bgcolor="yellow" width="30px"><a href="/switch/3D2/edit">2</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3D4/edit">4</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3D6/edit">6</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3D8/edit">8</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3D10/edit">10</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3D12/edit">12</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3D14/edit">14</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3D16/edit">16</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3D18/edit">18</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3D20/edit">20</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3D22/edit">22</td>
    <td bgcolor="yellow" width="30px"><a href="/switch/3D24/edit">24</td>
    </tr>
    <tr>     <!-- Core Switch 1: Slot E & F -->   
    <!-- Slot E1/2-->      
    <td width="50px">Slot E</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3E1/edit"><font color="white">1</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3E3/edit"><font color="white">3</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3E5/edit"><font color="white">5</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3E7/edit"><font color="white">7</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3E9/edit"><font color="white">9</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3E11/edit"><font color="white">11</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3E13/edit"><font color="white">13</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3E15/edit"><font color="white">15</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3E17/edit"><font color="white">17</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3E19/edit"><font color="white">19</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3E21/edit"><font color="white">21</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3E23/edit"><font color="white">23</td>
    <td width="30px"><a href="/switch"></td>
    <td width="50px">Slot F</td>
    <!-- Slot F1/2-->  
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3F1/edit"><font color="white">1</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3F3/edit"><font color="white">3</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3F5/edit"><font color="white">5</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3F7/edit"><font color="white">7</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3F9/edit"><font color="white">9</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3F11/edit"><font color="white">11</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3F13/edit"><font color="white">13</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3F15/edit"><font color="white">15</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3F17/edit"><font color="white">17</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3F19/edit"><font color="white">19</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3F21/edit"><font color="white">21</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3F23/edit"><font color="white">23</td>
    </tr>
    <tr>
    <td width="20px"></td>
    <!-- Slot E2/2-->  
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3E2/edit"><font color="white">2</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3E4/edit"><font color="white">4</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3E6/edit"><font color="white">6</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3E8/edit"><font color="white">8</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3E10/edit"><font color="white">10</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3E12/edit"><font color="white">12</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3E14/edit"><font color="white">14</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3E16/edit"><font color="white">16</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3E18/edit"><font color="white">18</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3E20/edit"><font color="white">20</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3E22/edit"><font color="white">22</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3E24/edit"><font color="white">24</td>
    <td width="30px"><a href="/switch"></td>
    <td width="20px"></td>
    <!-- Slot F2/2-->  
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3F2/edit"><font color="white">2</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3F4/edit"><font color="white">4</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3F6/edit"><font color="white">6</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3F8/edit"><font color="white">8</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3F10/edit"><font color="white">10</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3F12/edit"><font color="white">12</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3F14/edit"><font color="white">14</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3F16/edit"><font color="white">16</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3F18/edit"><font color="white">18</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3F20/edit"><font color="white">20</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3F22/edit"><font color="white">22</td>
    <td bgcolor="darkgreen" width="30px"><a href="/switch/3F24/edit"><font color="white">24</td>
    </tr>
    <tr>     <!-- Core Switch 1: Slot G & H -->        
    <td width="50px">Slot G</td>
    <!-- Slot G1/2-->  
    <td bgcolor="blue" width="30px"><a href="/switch/3G1/edit"><font color="white">1</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3G3/edit"><font color="white">3</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3G5/edit"><font color="white">5</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3G7/edit"><font color="white">7</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3G9/edit"><font color="white">9</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3G11/edit"><font color="white">11</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3G13/edit"><font color="white">13</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3G15/edit"><font color="white">15</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3G17/edit"><font color="white">17</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3G19/edit"><font color="white">19</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3G21/edit"><font color="white">21</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3G23/edit"><font color="white">23</td>
    <td width="30px"><a href="/switch"></td>
    <td width="50px">Slot H</td>
    <!-- Slot H1/2-->  
    <td bgcolor="blue" width="30px"><a href="/switch/3H1/edit"><font color="white">1</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3H3/edit"><font color="white">3</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3H5/edit"><font color="white">5</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3H7/edit"><font color="white">7</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3H9/edit"><font color="white">9</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3H11/edit"><font color="white">11</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3H13/edit"><font color="white">13</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3H15/edit"><font color="white">15</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3H17/edit"><font color="white">17</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3H19/edit"><font color="white">19</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3H21/edit"><font color="white">21</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3H23/edit"><font color="white">23</td>
    </tr>
    <tr>
    <!-- Slot G2/2-->
    <td width="20px"></td>
    <td bgcolor="blue" width="30px"><a href="/switch/3G2/edit"><font color="white"><font color="white">2</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3G4/edit"><font color="white">4</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3G6/edit"><font color="white">6</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3G8/edit"><font color="white">8</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3G10/edit"><font color="white">10</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3G12/edit"><font color="white">12</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3G14/edit"><font color="white">14</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3G16/edit"><font color="white">16</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3G18/edit"><font color="white">18</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3G20/edit"><font color="white">20</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3G22/edit"><font color="white">22</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3G24/edit"><font color="white">24</td>
    <td width="30px"><a href="/switch"></td>
    <td width="20px"></td>
    <!-- Slot H2/2-->
    <td bgcolor="blue" width="30px"><a href="/switch/3H2/edit"><font color="white">2</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3H4/edit"><font color="white">4</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3H6/edit"><font color="white">6</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3H8/edit"><font color="white">8</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3H10/edit"><font color="white">10</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3H12/edit"><font color="white">12</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3H14/edit"><font color="white">14</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3H16/edit"><font color="white">16</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3H18/edit"><font color="white">18</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3H20/edit"><font color="white">20</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3H22/edit"><font color="white">22</td>
    <td bgcolor="blue" width="30px"><a href="/switch/3H24/edit"><font color="white">24</td>
    </tr>
    <tr>     <!-- Core Switch 3: Slot I & J -->        
    <td width="50px">Slot I</td>
    <td bgcolor="lightblue" width="30px"><a href="/switch/3I1/edit">1</td>
    <td bgcolor="lightblue" width="30px"><a href="/switch/3I3/edit">3</td>
    <td bgcolor="lightblue" width="30px"><a href="/switch/3I5/edit">5</td>
    <td bgcolor="lightblue" width="30px"><a href="/switch/3I7/edit">7</td>
    <td bgcolor="lightblue" width="30px"><a href="/switch/3I9/edit">9</td>
    <td bgcolor="lightblue" width="30px"><a href="/switch/3I11/edit">11</td>
    <td width="30px"><a href="/switch/3I13/edit">13</td>
    <td width="30px"><a href="/switch/3I15/edit">15</td>
    <td width="30px"><a href="/switch/3I17/edit">17</td>
    <td width="30px"><a href="/switch/3I19/edit">19</td>
    <td width="30px"><a href="/switch/3I21/edit">21</td>
    <td width="30px"><a href="/switch/3I23/edit">23</td>
    <td width="30px"><a href="/switch"></td>
    <td width="50px">Slot J</td>
    <td width="30px"><a href="/switch/3J1/edit">1</td>
    <td width="30px"><a href="/switch/3J3/edit">3</td>
    <td width="30px"><a href="/switch/3J5/edit">5</td>
    <td width="30px"><a href="/switch/3J7/edit">7</td>
    <td width="30px"><a href="/switch/3J9/edit">9</td>
    <td width="30px"><a href="/switch/3J11/edit">11</td>
    <td bgcolor="pink" width="30px"><a href="/switch/3J13/edit">13</td>
    <td bgcolor="pink" width="30px"><a href="/switch/3J15/edit">15</td>
    <td bgcolor="pink" width="30px"><a href="/switch/3J17/edit">17</td>
    <td bgcolor="pink" width="30px"><a href="/switch/3J19/edit">19</td>
    <td bgcolor="pink" width="30px"><a href="/switch/3J21/edit">21</td>
    <td bgcolor="pink" width="30px"><a href="/switch/3J23/edit">23</td>
    </tr>
    <tr>
    <td width="20px"></td>
    <td bgcolor="lightblue" width="30px"><a href="/switch/3I2/edit">2</td>
    <td bgcolor="lightblue" width="30px"><a href="/switch/3I4/edit">4</td>
    <td bgcolor="lightblue" width="30px"><a href="/switch/3I6/edit">6</td>
    <td bgcolor="lightblue" width="30px"><a href="/switch/3I8/edit">8</td>
    <td bgcolor="lightblue" width="30px"><a href="/switch/3I10/edit">10</td>
    <td bgcolor="lightblue" width="30px"><a href="/switch/3I12/edit">12</td>
    <td width="30px"><a href="/switch/3I14/edit">14</td>
    <td width="30px"><a href="/switch/3I16/edit">16</td>
    <td width="30px"><a href="/switch/3I18/edit">18</td>
    <td width="30px"><a href="/switch/3I20/edit">20</td>
    <td width="30px"><a href="/switch/3I22/edit">22</td>
    <td width="30px"><a href="/switch/3I24/edit">24</td>
    <td width="30px"><a href="/switch"></td>
    <td width="20px"></td>
    <td width="30px"><a href="/switch/3J2/edit">2</td>
    <td width="30px"><a href="/switch/3J4/edit">4</td>
    <td width="30px"><a href="/switch/3J6/edit">6</td>
    <td width="30px"><a href="/switch/3J8/edit">8</td>
    <td width="30px"><a href="/switch/3J10/edit">10</td>
    <td width="30px"><a href="/switch/3J12/edit">12</td>
    <td bgcolor="pink" width="30px"><a href="/switch/3J14/edit">14</td>
    <td bgcolor="pink" width="30px"><a href="/switch/3J16/edit">16</td>
    <td bgcolor="pink" width="30px"><a href="/switch/3J18/edit">18</td>
    <td bgcolor="pink" width="30px"><a href="/switch/3J20/edit">20</td>
    <td bgcolor="pink" width="30px"><a href="/switch/3J22/edit">22</td>
    <td bgcolor="purple" width="30px"><a href="/switch/3J24/edit"><font color="white">24</td>
    </tr>
    <tr>     <!-- Core Switch 3: Slot K & L -->        
    <td width="50px">Slot K</td>
    <td width="30px"><a href="/switch/3K1/edit">1</td>
    <td width="30px"><a href="/switch/3K3/edit">3</td>
    <td width="30px"><a href="/switch/3K5/edit">5</td>
    <td width="30px"><a href="/switch/3K7/edit">7</td>
    <td width="30px"><a href="/switch/3K9/edit">9</td>
    <td width="30px"><a href="/switch/3K11/edit">11</td>
    <td bgcolor="brown" width="30px"><a href="/switch/3K13/edit"><font color="white">13</td>
    <td bgcolor="brown" width="30px"><a href="/switch/3K15/edit"><font color="white">15</td>
    <td bgcolor="brown" width="30px"><a href="/switch/3K17/edit"><font color="white">17</td>
    <td bgcolor="brown" width="30px"><a href="/switch/3K19/edit"><font color="white">19</td>
    <td bgcolor="brown" width="30px"><a href="/switch/3K21/edit"><font color="white">21</td>
    <td bgcolor="brown" width="30px"><a href="/switch/3K23/edit"><font color="white">23</td>
    <td width="30px"><a href="/switch"></td>
    <td width="50px">Slot L</td>
    <td width="30px"><a href="/switch"></td>
    <td width="30px"><a href="/switch"></td>
    <td width="30px"><a href="/switch/3L1/edit">1</td>
    <td width="30px"><a href="/switch/3L2/edit">2</td>
    <td width="30px"><a href="/switch/3L3/edit">3</td>
    <td width="30px"><a href="/switch/3L4/edit">4</td>
    <td width="30px"><a href="/switch/3L5/edit">5</td>
    <td width="30px"><a href="/switch/3L6/edit">6</td>
    <td bgcolor="red" width="30px"><a href="/switch/3L7/edit">7</td>
    <td bgcolor="red" width="30px"><a href="/switch/3L8/edit">8</td>
    <td width="30px"><a href="/switch"></td>
    <td width="30px"><a href="/switch"></td>
    </tr>
    <tr>
    <td width="20px"></td>
    <td width="30px"><a href="/switch/3K2/edit">2</td>
    <td width="30px"><a href="/switch/3K4/edit">4</td>
    <td width="30px"><a href="/switch/3K6/edit">6</td>
    <td width="30px"><a href="/switch/3K8/edit">8</td>
    <td width="30px"><a href="/switch/3K10/edit">10</td>
    <td width="30px"><a href="/switch/3K12/edit">12</td>
    <td bgcolor="brown" width="30px"><a href="/switch/3K14/edit"><font color="white">14</td>
    <td bgcolor="brown" width="30px"><a href="/switch/3K16/edit"><font color="white">16</td>
    <td bgcolor="brown" width="30px"><a href="/switch/3K18/edit"><font color="white">18</td>
    <td bgcolor="brown" width="30px"><a href="/switch/3K20/edit"><font color="white">20</td>
    <td bgcolor="brown" width="30px"><a href="/switch/3K22/edit"><font color="white">22</td>
    <td bgcolor="purple" width="30px"><a href="/switch/3K24/edit"><font color="white">24</td>
    <td width="30px"><a href="/switch"></td>
    <td width="20px"></td>
    <td width="30px"><a href="/switch"></td>
    <td width="30px"><a href="/switch"></td>
    <td width="30px"><a href="/switch"></td>
    <td width="30px"><a href="/switch"></td>
    <td width="30px"><a href="/switch"></td>
    <td width="30px"><a href="/switch"></td>
    <td width="30px"><a href="/switch"></td>
    <td width="30px"><a href="/switch"></td>
    <td width="30px"><a href="/switch"></td>
    <td width="30px"><a href="/switch"></td>
    <td width="30px"><a href="/switch"></td>
    <td width="30px"><a href="/switch"></td>
    </tr>
</table>
@endsection
