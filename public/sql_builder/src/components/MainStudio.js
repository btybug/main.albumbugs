import React from 'react';
import { Flex, Box } from 'reflexbox'
import Colors from '../utils/colors'
import {Tabs, Tab, TabId, Classes, ITreeNode, Tree} from "@blueprintjs/core";
import SplitPane from 'react-split-pane'

export default class MainStudio extends React.Component {

  state = {
    navbarTabId: 'Columns',
    animate: false,
    nodes: [{
      id: 0,
      hasCaret: true,
      icon: "folder-close",
      label: "Folder 0",
      childNodes: [{
        id: 1,
        icon: "file",
        label: "Folder 0",
      }]
    }]
  };

  handleNavbarTabChange = (navbarTabId: TabId) => this.setState({ navbarTabId });

  handleNodeCollapse = (nodeData: ITreeNode) => {
    nodeData.isExpanded = false;
    this.setState(this.state);
  };

  handleNodeExpand = (nodeData: ITreeNode) => {
    nodeData.isExpanded = true;
    this.setState(this.state);
  };

  componentDidMount(){
    let $this = this;
    setTimeout(function () {
      $this.setState({
        ...this.state,
        animate: true
      })
    }, 1000)
  }

  render() {
    return (
      <Flex column style={{flex: 1}}>
        <Box px={2} style={{backgroundColor: Colors.black, height: 80}}>Header</Box>
        <Box px={2} style={{backgroundColor: '#7a7a7a', height: '100%', position: 'relative'}}>
          <SplitPane split="vertical" defaultSize={350} minSize={200} maxSize={400}>
            <div style={{backgroundColor: Colors.white, height: '100%'}}>
              <Tree
                contents={this.state.nodes}
                onNodeCollapse={this.handleNodeCollapse}
                onNodeExpand={this.handleNodeExpand}
                className={Classes.ELEVATION_0}
              />
            </div>
            <div></div>
          </SplitPane>
        </Box>
        <Box px={2} style={{backgroundColor: '#f6f6f6', height: 300}}>
          <Tabs
            animate={this.state.animate}
            id="navbar"
            onChange={this.handleNavbarTabChange}
            selectedTabId={this.state.navbarTabId}
          >
            <Tab id="Columns" title="Columns" panel={(
              <div></div>
            )} />
            <Tab id="Files" title="Filters" panel={(
              <div>Text</div>
            )} />
            <Tab id="Builds" title="Limits & Sorting" />
          </Tabs>
        </Box>
      </Flex>
    )
  }
}
