@extends('admin.index')
@section('content')


<div class="box">
  <div class="box-header">
    <h3 class="box-title">{{ $title }}</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body box-body-student ">
    {!! Form::open(['url'=>aurl('student'),'files'=>true]) !!}
   
      

    
       <div class="form-group">
        {!! Form::label('name',trans('admin.name')) !!}
        {!! Form::text('name',old('name'),['class'=>'form-control' ,'required'=>'required','required'=>'required']) !!}
     </div>
        <div class="form-group">
        {!! Form::label('email',trans('admin.email')) !!}
        {!! Form::email('email',old('email'),['class'=>'form-control' ,'required'=>'required','required'=>'required']) !!}
     </div>      
       <div class="form-group">
        {!! Form::label('phone',trans('admin.phone')) !!}
        {!! Form::text('phone',old('phone'),['class'=>'form-control' ,'required'=>'required','required'=>'required']) !!}
     </div>
    <div class="row"  >
      <!-- ======================================= --> <!-- ======================================= -->
            <center> <h3 class="head-h3"> {!! Form::label('Student1',trans('admin.Student1')) !!}   </h3>  </center>
      <div class="col-lg-6">
                 {!! Form::label('st1_name',trans('admin.name')) !!}
                 {!! Form::text('st1_name',old('st1_name'),['class'=>'form-control']) !!}
           </div>
            <div class="col-lg-6">
                 {!! Form::label('st1_name',trans('admin.Gender')) !!}
                    <select class="form-control" name="st1_Gender" value="{{old('st1_Gender')}}"    >
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    </select> 
            </div>    
            <div class="col-lg-6">
                      {!! Form::label('st1_name',trans('admin.course')) !!}
                      <select class="form-control" name="st1_course" value="{{old('st1_course')}}">
                      <option value=".............">..............</option>
                      <option value="Quran">Quran Courses</option>
                      <option value="Islamic">Islamic Studies</option>
                      <option value="Arabic">Arabic Courses</option>
                      <option value="Ijaazah">Ijaazah Programs</option>
                      </select>
             </div><!-- ./col-lg-6-->  
            <div class="col-lg-6">
                        {!! Form::label('st1_name',trans('admin.age')) !!}
                        <select class="form-control" name="st1_age" value="{{old('st1_age')}}">
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        <option value="32">32</option>
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        <option value="43">43</option>
                        <option value="44">44</option>
                        <option value="45">45</option>
                        <option value="46">46</option>
                        <option value="47">47</option>
                        <option value="48">48</option>
                        <option value="49">49</option>
                        <option value="50">50</option>
                        <option value="51">51</option>
                        <option value="52">52</option>
                        <option value="53">53</option>
                        <option value="54">54</option>
                        <option value="55">55</option>
                        <option value="56">56</option>
                        <option value="57">57</option>
                        <option value="58">58</option>
                        <option value="59">59</option>
                        <option value="60">60</option>
                        <option value="61">61</option>
                        <option value="62">62</option>
                        <option value="63">63</option>
                        <option value="64">64</option>
                        <option value="65">65</option>
                        <option value="66">66</option>
                        <option value="67">67</option>
                        <option value="68">68</option>
                        <option value="69">69</option>
                        <option value="70">70</option>
                        <option value="71">71</option>
                        <option value="72">72</option>
                        <option value="73">73</option>
                        <option value="74">74</option>
                        <option value="74">75</option>
                        <option value="75">74</option>
                        <option value="76">76</option>
                        <option value="76">76</option>
                        <option value="77">77</option>
                        <option value="78">78</option>
                        <option value="79">79</option>
                        <option value="80">80</option>
                        <option value="81">81</option>
                        <option value="82">82</option>
                        <option value="83">83</option>
                        <option value="84">84</option>
                        <option value="85+">85+</option>
                      </select>
             </div><!-- ./col-lg-6-->  
        <!-- --------------------------------------------- -->
      <!-- ======================================= --> <!-- ======================================= -->
             <center> <h3 class="head-h3"> {!! Form::label('Student3',trans('admin.Student2')) !!}   </h3>  </center>
      <div class="col-lg-6">
                 {!! Form::label('st2_name',trans('admin.name')) !!}
                 {!! Form::text('st2_name',old('st1_name'),['class'=>'form-control']) !!}
           </div>
            <div class="col-lg-6">
                 {!! Form::label('st2_name',trans('admin.Gender')) !!}
                    <select class="form-control" name="st2_Gender" value="{{old('st2_Gender')}}"    >
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    </select> 
            </div>    
            <div class="col-lg-6">
                      {!! Form::label('st2_name',trans('admin.course')) !!}
                      <select class="form-control" name="st2_course" value="{{old('st2_course')}}">
                      <option value=".............">..............</option>
                      <option value="Quran">Quran Courses</option>
                      <option value="Islamic">Islamic Studies</option>
                      <option value="Arabic">Arabic Courses</option>
                      <option value="Ijaazah">Ijaazah Programs</option>
                      </select>
             </div><!-- ./col-lg-6-->  
            <div class="col-lg-6">
                        {!! Form::label('st2_name',trans('admin.age')) !!}
                        <select class="form-control" name="st2_age" value="{{old('st2_age')}}">
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        <option value="32">32</option>
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        <option value="43">43</option>
                        <option value="44">44</option>
                        <option value="45">45</option>
                        <option value="46">46</option>
                        <option value="47">47</option>
                        <option value="48">48</option>
                        <option value="49">49</option>
                        <option value="50">50</option>
                        <option value="51">51</option>
                        <option value="52">52</option>
                        <option value="53">53</option>
                        <option value="54">54</option>
                        <option value="55">55</option>
                        <option value="56">56</option>
                        <option value="57">57</option>
                        <option value="58">58</option>
                        <option value="59">59</option>
                        <option value="60">60</option>
                        <option value="61">61</option>
                        <option value="62">62</option>
                        <option value="63">63</option>
                        <option value="64">64</option>
                        <option value="65">65</option>
                        <option value="66">66</option>
                        <option value="67">67</option>
                        <option value="68">68</option>
                        <option value="69">69</option>
                        <option value="70">70</option>
                        <option value="71">71</option>
                        <option value="72">72</option>
                        <option value="73">73</option>
                        <option value="74">74</option>
                        <option value="74">75</option>
                        <option value="75">74</option>
                        <option value="76">76</option>
                        <option value="76">76</option>
                        <option value="77">77</option>
                        <option value="78">78</option>
                        <option value="79">79</option>
                        <option value="80">80</option>
                        <option value="81">81</option>
                        <option value="82">82</option>
                        <option value="83">83</option>
                        <option value="84">84</option>
                        <option value="85+">85+</option>
                      </select>
             </div><!-- ./col-lg-6-->  
        <!-- --------------------------------------------- -->
        <!-- ======================================= --> <!-- ======================================= -->
             <center> <h3 class="head-h3"> {!! Form::label('Student1',trans('admin.Student3')) !!}   </h3>  </center>
      <div class="col-lg-6">
                 {!! Form::label('st3_name',trans('admin.name')) !!}
                 {!! Form::text('st3_name',old('st1_name'),['class'=>'form-control']) !!}
           </div>
            <div class="col-lg-6">
                 {!! Form::label('st3_name',trans('admin.Gender')) !!}
                    <select class="form-control" name="st3_Gender" value="{{old('st3_Gender')}}"    >
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    </select> 
            </div>    
            <div class="col-lg-6">
                      {!! Form::label('st3_name',trans('admin.course')) !!}
                      <select class="form-control" name="st3_course" value="{{old('st3_course')}}">
                      <option value=".............">..............</option>
                      <option value="Quran">Quran Courses</option>
                      <option value="Islamic">Islamic Studies</option>
                      <option value="Arabic">Arabic Courses</option>
                      <option value="Ijaazah">Ijaazah Programs</option>
                      </select>
             </div><!-- ./col-lg-6-->  
            <div class="col-lg-6">
                        {!! Form::label('st3_name',trans('admin.age')) !!}
                        <select class="form-control" name="st3_age" value="{{old('st3_age')}}">
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        <option value="32">32</option>
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        <option value="43">43</option>
                        <option value="44">44</option>
                        <option value="45">45</option>
                        <option value="46">46</option>
                        <option value="47">47</option>
                        <option value="48">48</option>
                        <option value="49">49</option>
                        <option value="50">50</option>
                        <option value="51">51</option>
                        <option value="52">52</option>
                        <option value="53">53</option>
                        <option value="54">54</option>
                        <option value="55">55</option>
                        <option value="56">56</option>
                        <option value="57">57</option>
                        <option value="58">58</option>
                        <option value="59">59</option>
                        <option value="60">60</option>
                        <option value="61">61</option>
                        <option value="62">62</option>
                        <option value="63">63</option>
                        <option value="64">64</option>
                        <option value="65">65</option>
                        <option value="66">66</option>
                        <option value="67">67</option>
                        <option value="68">68</option>
                        <option value="69">69</option>
                        <option value="70">70</option>
                        <option value="71">71</option>
                        <option value="72">72</option>
                        <option value="73">73</option>
                        <option value="74">74</option>
                        <option value="74">75</option>
                        <option value="75">74</option>
                        <option value="76">76</option>
                        <option value="76">76</option>
                        <option value="77">77</option>
                        <option value="78">78</option>
                        <option value="79">79</option>
                        <option value="80">80</option>
                        <option value="81">81</option>
                        <option value="82">82</option>
                        <option value="83">83</option>
                        <option value="84">84</option>
                        <option value="85+">85+</option>
                      </select>
             </div><!-- ./col-lg-6-->  
        <!-- --------------------------------------------- -->
        <!-- ======================================= --> <!-- ======================================= -->
             <center> <h3 class="head-h3"> {!! Form::label('Student1',trans('admin.Student4')) !!}   </h3>  </center>
      <div class="col-lg-6">
                 {!! Form::label('st4_name',trans('admin.name')) !!}
                 {!! Form::text('st4_name',old('st1_name'),['class'=>'form-control']) !!}
           </div>
            <div class="col-lg-6">
                 {!! Form::label('st4_name',trans('admin.Gender')) !!}
                    <select class="form-control" name="st4_Gender" value="{{old('st4_Gender')}}"    >
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    </select> 
            </div>    
            <div class="col-lg-6">
                      {!! Form::label('st4_name',trans('admin.course')) !!}
                      <select class="form-control" name="st4_course" value="{{old('st4_course')}}">
                      <option value=".............">..............</option>
                      <option value="Quran">Quran Courses</option>
                      <option value="Islamic">Islamic Studies</option>
                      <option value="Arabic">Arabic Courses</option>
                      <option value="Ijaazah">Ijaazah Programs</option>
                      </select>
             </div><!-- ./col-lg-6-->  
            <div class="col-lg-6">
                        {!! Form::label('st4_name',trans('admin.age')) !!}
                        <select class="form-control" name="st4_age" value="{{old('st4_age')}}">
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        <option value="32">32</option>
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        <option value="43">43</option>
                        <option value="44">44</option>
                        <option value="45">45</option>
                        <option value="46">46</option>
                        <option value="47">47</option>
                        <option value="48">48</option>
                        <option value="49">49</option>
                        <option value="50">50</option>
                        <option value="51">51</option>
                        <option value="52">52</option>
                        <option value="53">53</option>
                        <option value="54">54</option>
                        <option value="55">55</option>
                        <option value="56">56</option>
                        <option value="57">57</option>
                        <option value="58">58</option>
                        <option value="59">59</option>
                        <option value="60">60</option>
                        <option value="61">61</option>
                        <option value="62">62</option>
                        <option value="63">63</option>
                        <option value="64">64</option>
                        <option value="65">65</option>
                        <option value="66">66</option>
                        <option value="67">67</option>
                        <option value="68">68</option>
                        <option value="69">69</option>
                        <option value="70">70</option>
                        <option value="71">71</option>
                        <option value="72">72</option>
                        <option value="73">73</option>
                        <option value="74">74</option>
                        <option value="74">75</option>
                        <option value="75">74</option>
                        <option value="76">76</option>
                        <option value="76">76</option>
                        <option value="77">77</option>
                        <option value="78">78</option>
                        <option value="79">79</option>
                        <option value="80">80</option>
                        <option value="81">81</option>
                        <option value="82">82</option>
                        <option value="83">83</option>
                        <option value="84">84</option>
                        <option value="85+">85+</option>
                      </select>
             </div><!-- ./col-lg-6-->  
        <!-- --------------------------------------------- -->
        <!-- ======================================= --> <!-- ======================================= -->
             <center> <h3 class="head-h3"> {!! Form::label('Student1',trans('admin.Student5')) !!}   </h3>  </center>
      <div class="col-lg-6">
                 {!! Form::label('st5_name',trans('admin.name')) !!}
                 {!! Form::text('st5_name',old('st1_name'),['class'=>'form-control']) !!}
           </div>
            <div class="col-lg-6">
                 {!! Form::label('st5_name',trans('admin.Gender')) !!}
                    <select class="form-control" name="st5_Gender" value="{{old('st5_Gender')}}"    >
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    </select> 
            </div>    
            <div class="col-lg-6">
                      {!! Form::label('st5_name',trans('admin.course')) !!}
                      <select class="form-control" name="st5_course" value="{{old('st5_course')}}">
                      <option value=".............">..............</option>
                      <option value="Quran">Quran Courses</option>
                      <option value="Islamic">Islamic Studies</option>
                      <option value="Arabic">Arabic Courses</option>
                      <option value="Ijaazah">Ijaazah Programs</option>
                      </select>
             </div><!-- ./col-lg-6-->  
            <div class="col-lg-6">
                        {!! Form::label('st5_name',trans('admin.age')) !!}
                        <select class="form-control" name="st5_age" value="{{old('st5_age')}}">
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        <option value="32">32</option>
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        <option value="43">43</option>
                        <option value="44">44</option>
                        <option value="45">45</option>
                        <option value="46">46</option>
                        <option value="47">47</option>
                        <option value="48">48</option>
                        <option value="49">49</option>
                        <option value="50">50</option>
                        <option value="51">51</option>
                        <option value="52">52</option>
                        <option value="53">53</option>
                        <option value="54">54</option>
                        <option value="55">55</option>
                        <option value="56">56</option>
                        <option value="57">57</option>
                        <option value="58">58</option>
                        <option value="59">59</option>
                        <option value="60">60</option>
                        <option value="61">61</option>
                        <option value="62">62</option>
                        <option value="63">63</option>
                        <option value="64">64</option>
                        <option value="65">65</option>
                        <option value="66">66</option>
                        <option value="67">67</option>
                        <option value="68">68</option>
                        <option value="69">69</option>
                        <option value="70">70</option>
                        <option value="71">71</option>
                        <option value="72">72</option>
                        <option value="73">73</option>
                        <option value="74">74</option>
                        <option value="74">75</option>
                        <option value="75">74</option>
                        <option value="76">76</option>
                        <option value="76">76</option>
                        <option value="77">77</option>
                        <option value="78">78</option>
                        <option value="79">79</option>
                        <option value="80">80</option>
                        <option value="81">81</option>
                        <option value="82">82</option>
                        <option value="83">83</option>
                        <option value="84">84</option>
                        <option value="85+">85+</option>
                      </select>
             </div><!-- ./col-lg-6-->  
        <!-- --------------------------------------------- -->
         <!-- ---===================================== -- -->   <!-- ---===================================== -- --> 
</div><!-- ./ ROW -->














<!--====================================================-->
<section class=" Example select"  >
  <div class="form-group">
    <label for="exampleFormControlSelect1" class="head-smol">  {{trans('admin.how_aboutus')}} </label>
      <select class="form-control" id="e " name="how_aboutus"  name="how_aboutus"><br><br>
      <option value="Word of mouth">Word of mouth</option>
      <option value="Facebook">Facebook</option>
      <option value="Instagram">Instagram</option>
      <option value="Google or other search">Google or other search</option>
      <option value="Advertisement">Advertisement</option>
      <option value="Other">Other</option>
      </select>
  </div>
  </section><!--./portflio-->
 <!--======================================================--> 
<!--====================================================-->
 <section class="  portfolio  "    >
                <div class="form-group">
    <label for="exampleFormControlSelect1" class="head-smol"> select  your timezone</label>
    <select class="form-control" id="exampleFormControlSelect1" name="timezone">
<option value="(GMT -12:00) Eniwetok, Kwajalein">(GMT -12:00) Eniwetok, Kwajalein</option>
            <option value="(GMT -11:00) Midway Island, Samoa">(GMT -11:00) Midway Island, Samoa</option>
            <option value="(GMT -10:00) Hawaii">(GMT -10:00) Hawaii</option>
            <option value="(GMT -9:00) Alaska">(GMT -9:00) Alaska</option>
            <option value="(GMT -8:00) Pacific Time (US &amp; Canada)">(GMT -8:00) Pacific Time (US &amp; Canada)</option>
            <option value="(GMT -7:00) Mountain Time (US &amp; Canada)">(GMT -7:00) Mountain Time (US &amp; Canada)</option>
            <option value="(GMT -6:00) Central Time (US &amp; Canada), Mexico City">(GMT -6:00) Central Time (US &amp; Canada), Mexico City</option>
            <option value="(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima" selected="selected">(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
            <option value="(GMT -4:30) Caracas">(GMT -4:30) Caracas</option>
            <option value="(GMT -4:00) Atlantic Time (Canada), La Paz, Santiago">(GMT -4:00) Atlantic Time (Canada), La Paz, Santiago</option>
            <option value="(GMT -3:30) Newfoundland">(GMT -3:30) Newfoundland</option>
            <option value="(GMT -3:00) Brazil, Buenos Aires, Georgetown">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
            <option value="(GMT -2:00) Mid-Atlantic">(GMT -2:00) Mid-Atlantic</option>
            <option value="(GMT -1:00 hour) Azores, Cape Verde Islands">(GMT -1:00 hour) Azores, Cape Verde Islands</option>
            <option value="(GMT) Western Europe Time, London, Lisbon, Casablanca, Greenwich">(GMT) Western Europe Time, London, Lisbon, Casablanca, Greenwich</option>
            <option value="(GMT +1:00 hour) Brussels, Copenhagen, Madrid, Paris">(GMT +1:00 hour) Brussels, Copenhagen, Madrid, Paris</option>
            <option value="(GMT +2:00) Kaliningrad, South Africa, Cairo">(GMT +2:00) Kaliningrad, South Africa, Cairo</option>
            <option value="(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg">(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
            <option value="(GMT +3:30) Tehran">(GMT +3:30) Tehran</option>
            <option value="(GMT +4:00) Abu Dhabi, Muscat, Yerevan, Baku, Tbilisi">(GMT +4:00) Abu Dhabi, Muscat, Yerevan, Baku, Tbilisi</option>
            <option value="(GMT +4:30) Kabul">(GMT +4:30) Kabul</option>
            <option value="(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent">(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
            <option value="(GMT +5:30) Mumbai, Kolkata, Chennai, New Delhi">(GMT +5:30) Mumbai, Kolkata, Chennai, New Delhi</option>
            <option value="(GMT +5:45) Kathmandu">(GMT +5:45) Kathmandu</option>
            <option value="(GMT +6:00) Almaty, Dhaka, Colombo">(GMT +6:00) Almaty, Dhaka, Colombo</option>
            <option value="(GMT +6:30) Yangon, Cocos Islands">(GMT +6:30) Yangon, Cocos Islands</option>
            <option value="(GMT +7:00) Bangkok, Hanoi, Jakarta">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
            <option value="(GMT +8:00) Beijing, Perth, Singapore, Hong Kong">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
            <option value="(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
            <option value="(GMT +9:30) Adelaide, Darwin">(GMT +9:30) Adelaide, Darwin</option>
            <option value="(GMT +10:00) Eastern Australia, Guam, Vladivostok">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
            <option value="(GMT +11:00) Magadan, Solomon Islands, New Caledonia">(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
            <option value="(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
    </select>
  </div>
  </section><!--./portflio-->
 <!--======================================================--> 
<!--====================================================-->
<section class="   "  >
                <div class="form-group">
    <label for="exampleFormControlSelect1">Select your location *</label>
    <select class="form-control"name="location">
 <option value="Australia">Australia</option>
 <option value="Canada">Canada</option>
 <option value="France">France</option>
 <option value="Hong Kong">Hong Kong</option>
 <option value="India">India</option>
 <option value="Indonesia">Indonesia</option>
 <option value="Pakistan">Pakistan</option>
 <option value="Saudi Arabia">Saudi Arabia</option>
 <option value="United States" selected="selected">United States</option>
 <option value="United Kingdom">United Kingdom</option>
 <option value="United Arab Emirates">United Arab Emirates</option>
 <option value="-----------------------">-----------------------</option>
 <option value="Afghanistan">Afghanistan</option>
 <option value="Åland Islands">Åland Islands</option>
 <option value="Albania">Albania</option>
 <option value="Algeria">Algeria</option>
 <option value="American Samoa">American Samoa</option>
 <option value="Andorra">Andorra</option>
 <option value="Angola">Angola</option>
 <option value="Anguilla">Anguilla</option>
 <option value="Antarctica">Antarctica</option>
 <option value="Antigua And Barbuda">Antigua And Barbuda</option>
 <option value="Argentina">Argentina</option>
 <option value="Armenia">Armenia</option>
 <option value="Aruba">Aruba</option>
 <option value="Australia">Australia</option>
 <option value="Austria">Austria</option>
 <option value="Azerbaijan">Azerbaijan</option>
 <option value="Bahamas">Bahamas</option>
 <option value="Bahrain">Bahrain</option>
 <option value="Bangladesh">Bangladesh</option>
 <option value="Barbados">Barbados</option>
 <option value="Belarus">Belarus</option>
 <option value="Belgium">Belgium</option>
 <option value="Belize">Belize</option>
 <option value="Benin">Benin</option>
 <option value="Bermuda">Bermuda</option>
 <option value="Bhutan">Bhutan</option>
 <option value="Bolivia">Bolivia</option>
 <option value="Bosnia And Herzegovina">Bosnia And Herzegovina</option>
 <option value="Botswana">Botswana</option>
 <option value="Bouvet Island">Bouvet Island</option>
 <option value="Brazil">Brazil</option>
 <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
 <option value="Brunei Darussalam">Brunei Darussalam</option>
 <option value="Bulgaria">Bulgaria</option>
 <option value="Burkina Faso">Burkina Faso</option>
 <option value="Burundi">Burundi</option>
 <option value="Cambodia">Cambodia</option>
 <option value="Cameroon">Cameroon</option>
 <option value="Canada">Canada</option>
 <option value="Cape Verde">Cape Verde</option>
 <option value="Cayman Islands">Cayman Islands</option>
 <option value="Central African Republic">Central African Republic</option>
 <option value="Chad">Chad</option>
 <option value="Chile">Chile</option>
 <option value="China">China</option>
 <option value="Christmas Island">Christmas Island</option>
 <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
 <option value="Colombia">Colombia</option>
 <option value="Comoros">Comoros</option>
 <option value="Congo">Congo</option>
 <option value="Congo, The Democratic Republic Of The">Congo, The Democratic Republic Of The</option>
 <option value="Cook Islands">Cook Islands</option>
 <option value="Costa Rica">Costa Rica</option>
 <option value="Cote D'ivoire">Cote D'ivoire</option>
 <option value="Croatia">Croatia</option>
 <option value="Cuba">Cuba</option>
 <option value="Cyprus">Cyprus</option>
 <option value="Czechia">Czechia</option>
 <option value="Denmark">Denmark</option>
 <option value="Djibouti">Djibouti</option>
 <option value="Dominica">Dominica</option>
 <option value="Dominican Republic">Dominican Republic</option>
 <option value="Ecuador">Ecuador</option>
 <option value="Egypt">Egypt</option>
 <option value="El Salvador">El Salvador</option>
 <option value="Equatorial Guinea">Equatorial Guinea</option>
 <option value="Eritrea">Eritrea</option>
 <option value="Estonia">Estonia</option>
 <option value="Ethiopia">Ethiopia</option>
 <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
 <option value="Faroe Islands">Faroe Islands</option>
 <option value="Fiji">Fiji</option>
 <option value="Finland">Finland</option>
 <option value="France">France</option>
 <option value="French Guiana">French Guiana</option>
 <option value="French Polynesia">French Polynesia</option>
 <option value="French Southern Territories">French Southern Territories</option>
 <option value="Gabon">Gabon</option>
 <option value="Gambia">Gambia</option>
 <option value="Georgia">Georgia</option>
 <option value="Germany">Germany</option>
 <option value="Ghana">Ghana</option>
 <option value="Gibraltar">Gibraltar</option>
 <option value="Greece">Greece</option>
 <option value="Greenland">Greenland</option>
 <option value="Grenada">Grenada</option>
 <option value="Guadeloupe">Guadeloupe</option>
 <option value="Guam">Guam</option>
 <option value="Guatemala">Guatemala</option>
 <option value="Guernsey">Guernsey</option>
 <option value="Guinea">Guinea</option>
 <option value="Guinea-bissau">Guinea-bissau</option>
 <option value="Guyana">Guyana</option>
 <option value="Haiti">Haiti</option>
 <option value="Heard Island And Mcdonald Islands">Heard Island And Mcdonald Islands</option>
 <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
 <option value="Honduras">Honduras</option>
 <option value="Hong Kong">Hong Kong</option>
 <option value="Hungary">Hungary</option>
 <option value="Iceland">Iceland</option>
 <option value="India">India</option>
 <option value="Indonesia">Indonesia</option>
 <option value="Iran, Islamic Republic Of">Iran, Islamic Republic Of</option>
 <option value="Iraq">Iraq</option>
 <option value="Ireland">Ireland</option>
 <option value="Isle Of Man">Isle Of Man</option>
 <option value="Israel">Israel</option>
 <option value="Italy">Italy</option>
 <option value="Jamaica">Jamaica</option>
 <option value="Japan">Japan</option>
 <option value="Jersey">Jersey</option>
 <option value="Jordan">Jordan</option>
 <option value="Kazakhstan">Kazakhstan</option>
 <option value="Kenya">Kenya</option>
 <option value="Kiribati">Kiribati</option>
 <option value="Korea, Democratic People's Republic Of">Korea, Democratic People's Republic Of</option>
 <option value="Korea, Republic Of">Korea, Republic Of</option>
 <option value="Kuwait">Kuwait</option>
 <option value="Kyrgyzstan">Kyrgyzstan</option>
 <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
 <option value="Latvia">Latvia</option>
 <option value="Lebanon">Lebanon</option>
 <option value="Lesotho">Lesotho</option>
 <option value="Liberia">Liberia</option>
 <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
 <option value="Liechtenstein">Liechtenstein</option>
 <option value="Lithuania">Lithuania</option>
 <option value="Luxembourg">Luxembourg</option>
 <option value="Macao">Macao</option>
 <option value="Macedonia, The Former Yugoslav Republic Of">Macedonia, The Former Yugoslav Republic Of</option>
 <option value="Madagascar">Madagascar</option>
 <option value="Malawi">Malawi</option>
 <option value="Malaysia">Malaysia</option>
 <option value="Maldives">Maldives</option>
 <option value="Mali">Mali</option>
 <option value="Malta">Malta</option>
 <option value="Marshall Islands">Marshall Islands</option>
 <option value="Martinique">Martinique</option>
 <option value="Mauritania">Mauritania</option>
 <option value="Mauritius">Mauritius</option>
 <option value="Mayotte">Mayotte</option>
 <option value="Mexico">Mexico</option>
 <option value="Micronesia, Federated States Of">Micronesia, Federated States Of</option>
 <option value="Moldova, Republic Of">Moldova, Republic Of</option>
 <option value="Monaco">Monaco</option>
 <option value="Mongolia">Mongolia</option>
 <option value="Montenegro">Montenegro</option>
 <option value="Montserrat">Montserrat</option>
 <option value="Morocco">Morocco</option>
 <option value="Mozambique">Mozambique</option>
 <option value="Myanmar">Myanmar</option>
 <option value="Namibia">Namibia</option>
 <option value="Nauru">Nauru</option>
 <option value="Nepal">Nepal</option>
 <option value="Netherlands">Netherlands</option>
 <option value="Netherlands Antilles">Netherlands Antilles</option>
 <option value="New Caledonia">New Caledonia</option>
 <option value="New Zealand">New Zealand</option>
 <option value="Nicaragua">Nicaragua</option>
 <option value="Niger">Niger</option>
 <option value="Nigeria">Nigeria</option>
 <option value="Niue">Niue</option>
 <option value="Norfolk Island">Norfolk Island</option>
 <option value="Northern Mariana Islands">Northern Mariana Islands</option>
 <option value="Norway">Norway</option>
 <option value="Oman">Oman</option>
 <option value="Pakistan">Pakistan</option>
 <option value="Palau">Palau</option>
 <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
 <option value="Panama">Panama</option>
 <option value="Papua New Guinea">Papua New Guinea</option>
 <option value="Paraguay">Paraguay</option>
 <option value="Peru">Peru</option>
 <option value="Philippines">Philippines</option>
 <option value="Pitcairn">Pitcairn</option>
 <option value="Poland">Poland</option>
 <option value="Portugal">Portugal</option>
 <option value="Puerto Rico">Puerto Rico</option>
 <option value="Qatar">Qatar</option>
 <option value="Reunion">Reunion</option>
 <option value="Romania">Romania</option>
 <option value="Russian Federation">Russian Federation</option>
 <option value="Rwanda">Rwanda</option>
 <option value="Saint Helena">Saint Helena</option>
 <option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option>
 <option value="Saint Lucia">Saint Lucia</option>
 <option value="Saint Pierre And Miquelon">Saint Pierre And Miquelon</option>
 <option value="Saint Vincent And The Grenadines">Saint Vincent And The Grenadines</option>
 <option value="Samoa">Samoa</option>
 <option value="San Marino">San Marino</option>
 <option value="Sao Tome And Principe">Sao Tome And Principe</option>
 <option value="Saudi Arabia">Saudi Arabia</option>
 <option value="Senegal">Senegal</option>
 <option value="Serbia">Serbia</option>
 <option value="Seychelles">Seychelles</option>
 <option value="Sierra Leone">Sierra Leone</option>
 <option value="Singapore">Singapore</option>
 <option value="Slovakia">Slovakia</option>
 <option value="Slovenia">Slovenia</option>
 <option value="Solomon Islands">Solomon Islands</option>
 <option value="Somalia">Somalia</option>
 <option value="South Africa">South Africa</option>
 <option value="South Georgia And The South Sandwich Islands">South Georgia And The South Sandwich Islands</option>
 <option value="Spain">Spain</option>
 <option value="Sri Lanka">Sri Lanka</option>
 <option value="Sudan">Sudan</option>
 <option value="Suriname">Suriname</option>
 <option value="Svalbard And Jan Mayen">Svalbard And Jan Mayen</option>
 <option value="Swaziland">Swaziland</option>
 <option value="Sweden">Sweden</option>
 <option value="Switzerland">Switzerland</option>
 <option value="Syrian Arab Republic">Syrian Arab Republic</option>
 <option value="Taiwan, Province Of China">Taiwan, Province Of China</option>
 <option value="Tajikistan">Tajikistan</option>
 <option value="Tanzania, United Republic Of">Tanzania, United Republic Of</option>
 <option value="Thailand">Thailand</option>
 <option value="Timor-leste">Timor-leste</option>
 <option value="Togo">Togo</option>
 <option value="Tokelau">Tokelau</option>
 <option value="Tonga">Tonga</option>
 <option value="Trinidad And Tobago">Trinidad And Tobago</option>
 <option value="Tunisia">Tunisia</option>
 <option value="Turkey">Turkey</option>
 <option value="Turkmenistan">Turkmenistan</option>
 <option value="Turks And Caicos Islands">Turks And Caicos Islands</option>
 <option value="Tuvalu">Tuvalu</option>
 <option value="Uganda">Uganda</option>
 <option value="Ukraine">Ukraine</option>
 <option value="United Arab Emirates">United Arab Emirates</option>
 <option value="United Kingdom">United Kingdom</option>
 <option value="United States">United States</option>
 <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
 <option value="Uruguay">Uruguay</option>
 <option value="Uzbekistan">Uzbekistan</option>
 <option value="Vanuatu">Vanuatu</option>
 <option value="Venezuela">Venezuela</option>
 <option value="Viet Nam">Viet Nam</option>
 <option value="Virgin Islands, British">Virgin Islands, British</option>
 <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
 <option value="Wallis And Futuna">Wallis And Futuna</option>
 <option value="Western Sahara">Western Sahara</option>
 <option value="Yemen">Yemen</option>
 <option value="Zambia">Zambia</option>
 <option value="Zimbabwe">Zimbabwe</option>
    </select>
  </div>
  </section><!--./portflio-->
 <!--======================================================--> 
<!-- ====================================================== -->

<div class="full-input" style=" width: 102%;
     margin-left: -1%;">
   <div class="form-group">
     <div class="grid">
      <div class="col-lg-6">
<!-- <input type="date" id="arrive" class="floatLabel input-date" name="date" value="<?php echo date('Y-m-d'); ?>">-->              
   <div class="form-group">
        {!! Form::label('date',trans('admin.date')) !!}
        {!! Form::date('date',old('date'),['class'=>'form-control']) !!}
     </div>
           </div>                <div class="col-lg-6">
              {!! Form::label('time',trans('admin.time')) !!}
              <select class="form-control" id="exampleFormControlSelect1" name="time">
              <option class="ui-timepicker-am">12:00 AM</option>
              <option class="ui-timepicker-am">12:30 AM</option>
              <option class="ui-timepicker-am">1:00 AM</option>
              <option class="ui-timepicker-am">1:30 AM</option>
             <option class="ui-timepicker-am">2:00 AM</option>
             <option class="ui-timepicker-am">2:30 AM</option>
             <option class="ui-timepicker-am">3:00 AM</option>
             <option class="ui-timepicker-am">3:30 AM</option>
             <option class="ui-timepicker-am">4:00 AM</option>
             <option class="ui-timepicker-am">4:30 AM</option>
             <option class="ui-timepicker-am">5:00 AM</option>
             <option class="ui-timepicker-am">5:30 AM</option>
             <option class="ui-timepicker-am">6:00 AM</option>
             <option class="ui-timepicker-am">6:30 AM</option>
             <option class="ui-timepicker-am">7:00 AM</option>
             <option class="ui-timepicker-am">7:30 AM</option>
             <option class="ui-timepicker-am">8:00 AM</option>
             <option class="ui-timepicker-am">8:30 AM</option>
             <option class="ui-timepicker-am">9:00 AM</option>
             <option class="ui-timepicker-am">9:30 AM</option>
             <option class="ui-timepicker-am">10:00 AM</option>
             <option class="ui-timepicker-am">10:30 AM</option>
             <option class="ui-timepicker-am">11:00 AM</option>
             <option class="ui-timepicker-am">11:30 AM</option>
             <option class="ui-timepicker-pm">12:00 PM</option>
             <option class="ui-timepicker-pm">12:30 PM</option>
             <option class="ui-timepicker-pm">1:00 PM</option>
             <option class="ui-timepicker-pm">1:30 PM</option>
             <option class="ui-timepicker-pm">2:00 PM</option>
             <option class="ui-timepicker-pm">2:30 PM</option>
             <option class="ui-timepicker-pm">3:00 PM</option>
             <option class="ui-timepicker-pm">3:30 PM</option>
             <option class="ui-timepicker-pm">4:00 PM</option>
             <option class="ui-timepicker-pm">4:30 PM</option>
             <option class="ui-timepicker-pm">5:00 PM</option>
             <option class="ui-timepicker-pm">5:30 PM</option>
             <option class="ui-timepicker-pm">6:00 PM</option>
             <option class="ui-timepicker-pm">6:30 PM</option>
             <option class="ui-timepicker-pm">7:00 PM</option>
             <option class="ui-timepicker-pm">7:30 PM</option>
             <option class="ui-timepicker-pm">8:00 PM</option>
             <option class="ui-timepicker-pm">8:30 PM</option>
             <option class="ui-timepicker-pm">9:00 PM</option>
             <option class="ui-timepicker-pm">9:30 PM</option>
             <option class="ui-timepicker-pm">10:00 PM</option>
             <option class="ui-timepicker-pm">10:30 PM</option>
             <option class="ui-timepicker-pm">11:00 PM</option>
             <option class="ui-timepicker-pm">11:30 PM</option>
            </select>    
        </div>
      </div>
  </div> <!-- /.form-group -->
 </div><br><br><br><br>
<!-- ============================================================= -->
<!--      <div class="form-group">
        {!! Form::label('message',trans('admin.message')) !!}
        {!! Form::textarea('message',old('message'),['class'=>'form-control']) !!}
     </div> -->


     <div class="form-group">
         <h3 class="head-h3"> {!! Form::label('message',trans('admin.message')) !!}   </h3>  
     <br><br>
     
        {!! Form::textarea('message',old('message'),['class'=>'form-control']) !!}
     </div>
     <div class="form-group">
        {!! Form::label('icon',trans('admin.student')) !!}
        {!! Form::file('icon',['class'=>'form-control icon']) !!}
 
     </div>

 
     <div class="form-group">
         <img  src="{{ asset( 'no_image/student.png')}} "  class="img-create-Edit" > 
     </div>
   
    
     {!! Form::submit(trans('admin.add'),['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->
@endsection