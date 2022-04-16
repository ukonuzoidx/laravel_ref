@component('mail::message')
# Introduction
<p>
    Hi {{ $intromail->name }}, <br />
    Thanks for signing up with us to use {{ config('app.name') }}. My name is [YOUR NAME], <br />
    and I'm your point-of-contact for getting up-and-running using the tool. Over the next few weeks, <br />
    I'll be sending you a few more emails to help you gain maximum value from [PRODUCT].<br />
    <hr />
</p>

<p>
    This is your login Details
<ul>
    <li>Email: {{ $intromail->email }}</li>
    <li>Password: {{ $intromail->temp_password }}</li>
</ul>
<small>Note this is your temporary password you are advised to change to the one you are familar with.</small>
</p>
<p>
    For the start, you might find these resources helpful for getting going: <br />
    [SETUP GUIDE][HOW-TO VIDEOS][COMPANY BLOG]
    If you have any difficulties with setting up the tool, we can schedule an onboarding call for next week, and I can walk you through it. <br />
     In the meantime, be sure to complete your profile and add your [CUSTOMER PREFERENCES] so we can send you other content that will help you get started. <br />
     If you ever have questions, run into problems, consider an upgrade or anything at all, don't hesitate to reach out to us via phone [NUMBER], email [ADDRESS], or live chat [CLICK-TO-CHAT], or you can connect with me directly using the contact information below. <br />
</p>    

<h4>
    For enquiries contact :
</h4>
<p>
    Tel :
    <a href="tel:+234 903 041 5586 ">+234 903 041 5586 </a><br>
    Email:
    <a href="mailto:{{ config('mail.from.address') }} ">{{ config('mail.from.address') }} </a><br>

    Looking forward to hearing from you soon! <br />
    Regards, <br />
    [YOUR SIGNATURE]
    {{ config('app.name') }} Team .... <br>

</p>


Thanks,<br>
{{ config('app.name') }} 

@endcomponent
