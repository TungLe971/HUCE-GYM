var calendar;
var Calendar = FullCalendar.Calendar;
var events = [];
$(function() {
    if (!!scheds) {
        Object.keys(scheds).map(k => {
            var row = scheds[k]
            events.push({ id: row.id, title: row.lop, start: row.ngay_hoc });
        })
    }
    var date = new Date()
    var d = date.getDate(),
        m = date.getMonth(),
        y = date.getFullYear()

    calendar = new Calendar(document.getElementById('calendar'), {
        headerToolbar: {
            left: 'prev,next today',
            right: 'dayGridMonth,dayGridWeek,list',
            center: 'title',
        },
        selectable: true,
        themeSystem: 'bootstrap',
        //Random default events
        events: events,
        eventClick: function(info) {
            var _details = $('#event-details-modal')
            var id = info.event.id
            if (!!scheds[id]) {
                _details.find('#lop').text(scheds[id].lop)
                _details.find('#nhan_vien').text(scheds[id].nhan_vien)
                _details.find('#ngay_hoc').text(scheds[id].sdate)
                _details.find('#edit,#delete').attr('data-id', id)
                _details.modal('show')
            } else {
                alert("không xác định");
            }
        },
        eventDidMount: function(info) {
            // Do Something after events mounted
        },
        editable: true
    });

    calendar.render();

    // Form reset listener
    $('#schedule-form').on('reset', function() {
        $(this).find('input:hidden').val('')
        $(this).find('input:visible').first().focus()
    })

    // Edit Button
    $('#edit').click(function() {
        var id = $(this).attr('data-id')
        if (!!scheds[id]) {
            var _form = $('#schedule-form')
            console.log(String(scheds[id].ngay_hoc), String(scheds[id].ngay_hoc).replace(" ", "\\t"))
            _form.find('[name="id"]').val(id)
            _form.find('[name="lop"]').val(scheds[id].lop)
            _form.find('[name="nhan_vien"]').val(scheds[id].nhan_vien)
            _form.find('[name="ngay_hoc"]').val(String(scheds[id].ngay_hoc).replace(" ", "T"))
            $('#event-details-modal').modal('hide')
            _form.find('[name="lop"]').focus()
        } else {
            alert("Event is undefined");
        }
    })

    // Delete Button / Deleting an Event
    $('#delete').click(function() {
        var id = $(this).attr('data-id')
        if (!!scheds[id]) {
            var _conf = confirm("bạn muốn xóa lịch học này?");
            if (_conf === true) {
                location.href = "../../../controller/controller_nhan_vien/lich_di_lam/lich_lam_del.php?id=" + id;
            }
        } else {
            alert("lỗi không xác định");
        }
    })
})