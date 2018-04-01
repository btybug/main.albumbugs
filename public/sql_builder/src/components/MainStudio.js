import React from 'react';
import {Flex, Box} from 'reflexbox'
import Colors from '../utils/colors'
import {Tabs, Tab, TabId, Classes, ITreeNode, Tree, Checkbox} from "@blueprintjs/core"
import SplitPane from 'react-split-pane'
import API from '../utils/api'
import {BeatLoader} from 'halogenium'
import Draggable from 'react-draggable'
import 'react-table/react-table.css'
import ReactTable from 'react-table'

import {Query, Builder, Utils as QbUtils} from 'react-awesome-query-builder';
import config from '../utils/queryConfig'; //see below 'Config format'
import 'react-awesome-query-builder/css/styles.scss';
import 'react-awesome-query-builder/css/compact_styles.scss';
import 'react-awesome-query-builder/css/denormalize.scss';

const api = API.create()

export default class MainStudio extends React.Component {

    state = {
        navbarTabId: 'Columns',
        animate: false,
        nodes: [{
            id: 0,
            label: "forms_cms",
            icon: 'database',
            secondaryLabel: (
                <BeatLoader color="#c0c0c0" size="12px" margin="4px" verticalAlign="middle"/>
            )
        }],
        selectedTables: [],
        columnsData: [],
    }

    componentDidMount() {
        this._loadTables().then()
    }

    handleNavbarTabChange = (navbarTabId: TabId) => this.setState({navbarTabId});

    handleNodeCollapse = (nodeData: ITreeNode) => {
        nodeData.isExpanded = false;
        this.setState(this.state);
    }

    handleNodeExpand = (nodeData: ITreeNode) => {
        nodeData.isExpanded = true;
        this.setState(this.state);
    }

    handleNodeClick = (nodeData: ITreeNode) => {
        let nodes = this.state.nodes,
            currentNode = nodes[0].childNodes[nodeData.id - 1],
            lastID = nodes[0].childNodes.length,
            childNodes = [],
            selectedTables = this.state.selectedTables

        if (nodeData.id === 0 || !currentNode || currentNode.childNodes) return

        currentNode.secondaryLabel = (
            <BeatLoader color="#c0c0c0" size="10px" margin="4px" verticalAlign="middle"/>
        )

        this.setState({nodes})

        this._loadColumns(nodeData.label).then((columns) => {

            delete currentNode.secondaryLabel

            columns.map((column, index) => {
                childNodes.push({
                    id: nodeData.id + "." +lastID + index,
                    label: column.COLUMN_NAME,
                    icon: 'pause',
                    table: nodeData.label
                })
            })

            currentNode.childNodes = childNodes
            currentNode.hasCaret = true

            selectedTables.push(currentNode)

            this.setState({nodes, selectedTables})
        })
    }

    _loadColumns = async (table) => {
        const columnsRequest = await api.listColumns(table)
        return columnsRequest.data.data
    }

    _loadTables = async () => {
        const tablesRequest = await api.listTables()
        const tables = tablesRequest.data.data

        let nodes = this.state.nodes,
            childNodes = []

        tables.map((table, index) => {
            childNodes.push({
                id: index + 1,
                label: table.Tables_in_forms_cms,
                icon: 'th',
            })
        })

        delete nodes[0].secondaryLabel
        nodes[0].hasCaret = true
        nodes[0].isExpanded = true
        nodes[0].childNodes = childNodes

        this.setState({nodes})
    }

    getChildren(props) {
        return (
            <div>
                <div className="query-builder">
                    <Builder {...props} />
                </div>
                <div>Query string: {QbUtils.queryString(props.tree, props.config)}</div>
            </div>
        )
    }

    render() {

        return (
            <Flex column style={{flex: 1}}>
                <Box px={2} style={{backgroundColor: Colors.black, height: 80}}>Header</Box>
                <Box px={2} style={{backgroundColor: '#7a7a7a', height: '100%', position: 'relative'}}>
                    <SplitPane split="vertical" defaultSize={350} minSize={200} maxSize={400}>
                        <div style={{backgroundColor: Colors.white, height: '100%', overflowY: 'scroll'}}>
                            <Tree
                                contents={this.state.nodes}
                                onNodeCollapse={this.handleNodeCollapse}
                                onNodeExpand={this.handleNodeExpand}
                                onNodeClick={this.handleNodeClick}
                                className={Classes.ELEVATION_0}
                            />
                        </div>
                        <div className="visual-editor">
                            {this.state.selectedTables.map((table) => (
                                <Draggable
                                    key={table.id}
                                    bounds='.visual-editor'
                                    onStart={this.handleStart}
                                    onDrag={this.handleDrag}
                                    onStop={this.handleStop}>

                                    <div className="pt-dialog" style={{padding: 0, margin: 0, width: 250}}>
                                        <div className="pt-dialog-header">
                                            <span className="pt-icon-large pt-icon-th" />
                                            <h4 className="pt-dialog-header-title">{table.label}</h4>
                                            <button className="pt-dialog-close-button pt-icon-small-cross" />
                                        </div>
                                        <div style={{padding: 10, maxHeight: 200, overflowY: 'auto'}}>
                                            <ul className="pt-tree-node-list pt-tree-root">
                                                {table.childNodes.map((column) => (
                                                    <li className="pt-tree-node" key={column.id}>
                                                        <div className="pt-tree-node-content" style={{paddingLeft: 10}}>
                                                            <Checkbox onChange={(e) => {
                                                                const isChecked = e.target.checked

                                                                let columnsData = this.state.columnsData

                                                                if(isChecked){
                                                                    columnsData.push({
                                                                        id: column.id,
                                                                        expression: column.table + "." + column.label,
                                                                        name: column.label
                                                                    })
                                                                }else{
                                                                    columnsData = columnsData.filter((columnData) => {
                                                                        return columnData.id !== column.id
                                                                    })
                                                                }

                                                                this.setState({ columnsData })

                                                            }} className="panel-checkbox" />

                                                            <span className="pt-tree-node-icon pt-icon-standard pt-icon-pause"/>
                                                            <span className="pt-tree-node-label">{column.label}</span>
                                                        </div>
                                                    </li>
                                                ))}
                                            </ul>
                                        </div>
                                    </div>

                                </Draggable>
                            ))}
                        </div>
                    </SplitPane>
                </Box>
                <Box px={2} style={{backgroundColor: '#f6f6f6', height: 400}}>
                    <Tabs
                        animate={this.state.animate}
                        id="navbar"
                        onChange={this.handleNavbarTabChange}
                        selectedTabId={this.state.navbarTabId}
                    >
                        <Tab id="Columns" title="Columns" panel={(
                            <ReactTable
                                data={this.state.columnsData}
                                columns={[{
                                    Header: 'Column Expression',
                                    accessor: 'expression'
                                }, {
                                    Header: 'Column Name',
                                    accessor: 'name'
                                }]}
                                defaultPageSize={10}
                                style={{height: 200}}
                            />
                        )}/>
                        <Tab id="Files" title="Filters" panel={(
                            <Query
                                {...config}
                                get_children={this.getChildren}
                            />
                        )}/>
                        <Tab id="Builds" title="Limits & Sorting"/>
                    </Tabs>
                </Box>
            </Flex>
        )
    }
}
