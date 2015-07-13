//=To make "Acme's" policy, we point at the model policy:

=[FoleyGRS/FCPAPolicy/Form/FCPA_01-02.md]

//=We point at Acme:

P1.=[U/id/acme_incorporated]

//=We provide some particulars:

Effective.YMD=September 1, 2015

Intermediary.Supervisor.Title=Director of Marketing

Local.Compliance.Contact.Title=Regional Financial Controller

Compliance.Contact.Title=Chief Compliance Officer

Compliance.Phone=+33.1.23.45.67.89

Compliance.Link=<a href="http://commonaccord.org/Doc/U/id/acme_incorporated">acme.com/Compliance</a>

Compliance.Email=compliance@acme.com

Courtesy.Gift.PermittedMax.Value=$100

//=We reuse information that we already have:

Compliance.Name,Address={Compliance.Contact.Title}, {P1.Addr.1,2}, {P1.Addr.UK}

Courtesy.TravelOffer.Supervisor={Compliance.Name,Address}

//=We can communicate through to the end user about the document.  We could also provide a link for further information.  

MessageToUser=Draft 2015-07-06

//=All this is plain text documents that you can edit in a browser, in an email or with a text editor.  For instance you could change any of the provisions of the policy by clicking on Edit above, removing the leading "/" and filling in one of the lines below (the text is in bold so you can see the result):

/Purpose.1.sec=<ins>{The_Company} is committed to conducting business fairly, honorably, with integrity, and in compliance with the laws of every country in which it operates.</ins>

//=Or you could do a second draft of this policy here: [Acme-Policies/Acme-AntiBriberyPolicy_0102.md]