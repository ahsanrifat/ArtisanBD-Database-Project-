function populate(s1,s2){
            var s1 = document.getElementById(s1);
            var s2 = document.getElementById(s2);
            s2.innerHTML = "";
            if(s1.value == "Dhaka"){
		var optionArray = ["|","khilgaon|Khilgaon","shyamoli|Shyamoli","mohammadpur|Mohammadpur","badda|Badda","gulshan|Gulshan","jigatola|Jigatola","dhanmondi|Dhanmondi","basabo|Basabo","mohakhali|Mohakhali","mirpur|Mirpur","tejgaon|Tejgaon","banani|Banani","baridhara|Baridhara","uttora|Uttora","savar|Savar","shahjahanpur|Shahjahanpur","rampura|Rampura","abdullahpur|Abdullahpur","demra|Demra","newmarket|Newmarket","khilket|Khilkhet","kaoranbazar|Kaoranbazar","elephantroad|Elephantroad","sadarghat|Sadarghat","romna|Romna"];
            optionArray.sort();
            } else if(s1.value == "Chittagong"){
		var optionArray = ["|","agrabad|Agrabad","chakbajar|Chakbajar","nasirabad|Nasirabad","nasirabad|Nasirabad","kotoali|Kotoali","halishohor|Halishohor","potenga|Potenga","potiya|Potiya","bashkhali|Bashkhali"];
            optionArray.sort();
            } else if(s1.value == "Sylhet"){
		var optionArray = ["|","bondorbajar|Bondorbajar","akhalia|Akhalia","kumarpara|Kumarpara","amborkhana|Amborkhana","chouhatta|Chouhatta"];
            optionArray.sort();
            }
            for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
}



function populate2(s1,s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	s2.innerHTML = "";
	if(s1.value == "IT"){
		var optionArray = ["|","administrator|Administrator","analyst|Analyst","architect|Architect","consultant|Consultant","designer|Designer","developer|Developer","engineer|Engineer","manager|Manager","programmer|Programmer","technician|Technician"];
        optionArray.sort();
	} else if(s1.value == "Tuition"){
		var optionArray = ["|","  O & A Levels|  O & A Levels","SSC|SSC","HSC|HSC"];
        optionArray.sort();
	} else if(s1.value == "Health"){
		var optionArray = ["|","health Care|Health Care","Medical, Mobility & Disability|Medical, Mobility & Disability","Natural & Homeopathic Remedies|Natural & Homeopathic Remedies","Weight Management|Weight Management","Vitamins & Supplements|Vitamins & Supplements"];
         optionArray.sort();
        optionArray.sort();
	} else if(s1.value == "Repair"){
		var optionArray = ["|","  electricity|Electricity","materials|Materials","Other|Other"];
         optionArray.sort();
	}
	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
}