const openUserpicButtons = document.querySelectorAll('[data-userpic-target]')
const closeUserpicButtons = document.querySelectorAll('[data-close-button]')
const overlay = document.getElementById('overlay')

openUserpicButtons.forEach(button => {
  button.addEventListener('click', () => {
    const userpic = document.querySelector(button.dataset.userpicTarget)
    openUserpic(userpic)
  })
})

overlay.addEventListener('click', () => {
  const userpics = document.querySelectorAll('.userpic.active')
  userpics.forEach(userpic => {
    closeUserpic(userpic)
  })
})

closeUserpicButtons.forEach(button => {
  button.addEventListener('click', () => {
    const userpic = button.closest('.userpic')
    closeUserpic(muserpic)
  })
})

function openUserpic(userpic) {
  if (userpic == null) return
  userpic.classList.add('active')
  overlay.classList.add('active')
}

function closeUserpic(userpic) {
  if (userpic == null) return
  userpic.classList.remove('active')
  overlay.classList.remove('active')
}

const form = document.getElementById('form');
const subject = document.getElementById('subject');
const quest = document.getElementById('quest');
const deadline = document.getElementById('deadline');

form.addEventListener('submit', e => {
	e.preventDefault();
	
	checkInputs();
});

function checkInputs() {
	// trim to remove the whitespaces
	const subjectValue = subject.value.trim();
	const questValue = quest.value.trim();
	const deadlineValue = deadline.value.trim();
	
	if(subjectValue === '') {
		setErrorFor(subject, '科目不可為空白');
	} else {
		setSuccessFor(subject);
	}
	
	if(questValue === '') {
		setErrorFor(quest, '任務不可為空白');
	}  else {
		setSuccessFor(quest);
	}
	
	if(deadlineValue === '') {
		setErrorFor(deadline, '截止日期不可為空白');
	} else {
		setSuccessFor(deadline);
	}
	
}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}

// SOCIAL PANEL JS
const floating_btn = document.querySelector('.floating-btn');
const close_btn = document.querySelector('.close-btn');
const social_panel_container = document.querySelector('.social-panel-container');

floating_btn.addEventListener('click', () => {
	social_panel_container.classList.toggle('visible')
});

close_btn.addEventListener('click', () => {
	social_panel_container.classList.remove('visible')
});