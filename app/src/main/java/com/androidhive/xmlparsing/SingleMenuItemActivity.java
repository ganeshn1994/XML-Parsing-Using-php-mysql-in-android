package com.androidhive.xmlparsing;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.widget.TextView;

public class SingleMenuItemActivity  extends Activity {
	
	// XML node keys
    static final String KEY_NUM = "mnumber";
    static final String LATITUDE = "latitude";
    static final String LOGITUDE = "longitude";
	@Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.single_list_item);
        
        // getting intent data
        Intent in = getIntent();
        
        // Get XML values from previous intent
        String name = in.getStringExtra(KEY_NUM);
        String cost = in.getStringExtra(LATITUDE);
        String description = in.getStringExtra(LOGITUDE);
        
        // Displaying all values on the screen
        TextView lblName = (TextView) findViewById(R.id.name_label);
        TextView lblCost = (TextView) findViewById(R.id.cost_label);
        TextView lblDesc = (TextView) findViewById(R.id.description_label);
        
        lblName.setText(name);
        lblCost.setText(cost);
        lblDesc.setText(description);
    }
}
