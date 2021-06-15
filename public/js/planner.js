const canvas = document.getElementById('canvas')
const ctx = canvas.getContext('2d')
const track1Input = document.getElementById('track1')
const track2Input = document.getElementById('track2')
const track3Input = document.getElementById('track3')
const track4Input = document.getElementById('track4')
const track5Input = document.getElementById('track5')

const scheduleInput = document.getElementById('schedule')
const dontforgetInput = document.getElementById('dontforget')
const downloadjpgBtn = document.getElementById('download-jpg-btn')
    //const downloadpdfBtn = document.getElementById('download-pdf-btn')

const colortrack = '#87A7B3'
const image = new Image()
image.src = '/assets/planner/Pastel-Daily-Planner.jpg'
image.onload = function() {
        drawImage()
    }
    //------------------------------
function drawImage() {
    // ctx.clearRect(0, 0, canvas.width, canvas.height)
    ctx.drawImage(image, 10, 10, canvas.width, canvas.height)
    drawTrack1Image() + drawTrack2Image() + drawTrack3Image() + drawTrack4Image() + drawTrack5Image() +
        drawScheduleImage() + drawDontForgetImage()
}

function drawTrack1Image() {
    ctx.font = '15px Pangolin'
    ctx.fillStyle = colortrack
    ctx.fillText(track1Input.value, 60, 245)
}

function drawTrack2Image() {
    ctx.font = '15px Pangolin'
    ctx.fillStyle = colortrack
    ctx.fillText(track2Input.value, 60, 290)
}

function drawTrack3Image() {
    ctx.font = '15px Pangolin'
    ctx.fillStyle = colortrack
    ctx.fillText(track3Input.value, 60, 340)
}

function drawTrack4Image() {
    ctx.font = '15px Pangolin'
    ctx.fillStyle = colortrack
    ctx.fillText(track4Input.value, 60, 390)
}

function drawTrack5Image() {
    ctx.font = '15px Pangolin'
    ctx.fillStyle = colortrack
    ctx.fillText(track5Input.value, 60, 435)
}

function drawScheduleImage() {
    ctx.font = '15px Pangolin'
    ctx.fillStyle = colortrack
    ctx.fillText(scheduleInput.value, 260, 245)
}

function drawDontForgetImage() {
    ctx.font = '15px Pangolin'
    ctx.fillStyle = colortrack
    ctx.fillText(dontforgetInput.value, 100, 530)

}
//-----------------------------------------------------
track1Input.addEventListener('input', function() {
    drawTrack1Image()
})
track2Input.addEventListener('input', function() {
    drawTrack2Image()
})
track3Input.addEventListener('input', function() {
    drawTrack3Image()
})
track4Input.addEventListener('input', function() {
    drawTrack4Image()
})
track5Input.addEventListener('input', function() {
    drawTrack5Image()
})
scheduleInput.addEventListener('input', function() {
    drawScheduleImage()
})
dontforgetInput.addEventListener('input', function() {
    drawDontForgetImage()
})

downloadjpgBtn.addEventListener('click', function() {
        downloadjpgBtn.href = canvas.toDataURL('image/jpg')
        downloadjpgBtn.download = 'My Daily Planner'
    })
    /*
    downloadpdfBtn.addEventListener('click', function() {
        downloadpdfBtn.href = canvas.toDataURL('file/pdf')
        downloadpdfBtn.download = 'My Daily Planner'
    })*/