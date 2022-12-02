from flask import render_template, Flask, request
app=Flask(__name__)


@app.route('/moveit')
def index():
    name = 'MOVE-IT'
    return render_template('Service.html', title='Welcome', username=name)


app.run(debug=True, port=80)