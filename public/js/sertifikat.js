const canvas = document.getElementById('canvassertif')
const ctx = canvas.getContext('2d')
const nameInput = document.getElementById('name')
const tujuanInput = document.getElementById('tujuan')
const petinggi1Input = document.getElementById('petinggi1')
const petinggi2Input = document.getElementById('petinggi2')
const statuspetinggi1Input = document.getElementById('statuspetinggi1')
const statuspetinggi2Input = document.getElementById('statuspetinggi2')
const downloadBtn = document.getElementById('download-btn')

const colortrack = '#87A7B3'
const image = new Image()
image.src = '/assets/sertifikat/ser-ijo.jpg'
image.onload = function() {
    drawImage()
}

function drawImage() {
    // ctx.clearRect(0, 0, canvas.width, canvas.height)
    ctx.drawImage(image, 50, 10, canvas.width, canvas.height)
    drawTujuanImage() + drawNameImage() + drawPetinggi1Image() + drawPetinggi2Image() + drawStatusPetinggi1Image() + drawStatusPetinggi2Image();
}

function drawNameImage() {
    ctx.font = '40px Futura'
    ctx.fillStyle = '#5E8B7E'
    ctx.fillText(nameInput.value, 220, 230)
}

function drawTujuanImage() {
    ctx.font = '15px Garamond'
    ctx.fillStyle = '#black'
    ctx.fillText(tujuanInput.value, 220, 270)
}

function drawPetinggi1Image() {
    ctx.font = '15px calibri'
    ctx.fillStyle = '#5E8B7E'
    ctx.fillText(petinggi1Input.value, 100, 240)
}

function drawPetinggi2Image() {
    ctx.font = '15px calibri'
    ctx.fillStyle = '#5E8B7E'
    ctx.fillText(petinggi2Input.value, 100, 300)
}

function drawStatusPetinggi1Image() {
    ctx.font = '12px Garamond'
    ctx.fillStyle = 'black'
    ctx.fillText(statuspetinggi1Input.value, 100, 255)
}


function drawStatusPetinggi2Image() {
    ctx.font = '12px Garamond'
    ctx.fillStyle = 'black'
    ctx.fillText(statuspetinggi2Input.value, 100, 315)
}

nameInput.addEventListener('input', function() {
    drawNameImage()
})
tujuanInput.addEventListener('input', function() {
    drawTujuanImage()
})
petinggi1Input.addEventListener('input', function() {
    drawPetinggi1Image()
})
petinggi2Input.addEventListener('input', function() {
    drawPetinggi2Image()
})
statuspetinggi1Input.addEventListener('input', function() {
    drawStatusPetinggi1Image()
})
statuspetinggi2Input.addEventListener('input', function() {
    drawStatusPetinggi2Image()
})

downloadBtn.addEventListener('click', function() {
    downloadBtn.href = canvas.toDataURL('image/jpg')
    downloadBtn.download = 'Certificate - ' + nameInput.value
})